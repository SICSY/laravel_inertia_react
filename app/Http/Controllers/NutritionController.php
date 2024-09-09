<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightForAgeStandard;
use App\Models\HeightForAgeStandard;
use App\Models\WeightForHeightStandard;
use Mockery\Undefined;

class NutritionController extends Controller
{
    public function index()
    {
        return view('nutrition.index');
    }

    public function calculate(Request $request)
    {
        // Determine the type of measurement
        $type = $request->input('type');
        
        // Base validation rules
        $rules = [
            'type' => 'required|in:weight,height,weight-for-height',
            'gender' => 'required|in:male,female',
        ];
    
        // Add additional validation rules based on type
        if ($type === 'weight' || $type === 'weight-for-height') {
            $rules['weight'] = 'required|numeric|min:1';
        }
    
        if ($type === 'height' || $type === 'weight-for-height') {
            $rules['height'] = 'required|numeric|min:1';
        }
    
        if ($type !== 'weight-for-height') {
            $rules['age_months'] = 'required|integer|min:0|max:60';
        }
    
        // Validate the request
        $request->validate($rules);
    
        $weight = $request->weight ?? null;
        $height = $request->height ?? null;
        $ageMonths = $request->age_months;
        $gender = $request->gender;
    
        // Fetch the standard data based on the type
        $standard = $this->getStandardData($type, $gender, $ageMonths ,$height);
    
        if (!$standard) {
            return response()->json(['error' => 'Data not found'], 404);
        }
       
    
        // Calculate the Z-score
        $median = $standard->median;
        $minus_1_sd = $standard->minus_1_sd;
        $plus_1_sd = $standard->plus_1_sd;
        $stdDev = ($weight <= $median ? $minus_1_sd: $plus_1_sd);
        
        if ($type === 'weight-for-height') {

            if ($weight < $median){
                $zScore = ($weight - $median) / ($median -$stdDev);
            }else{
                $zScore = ($weight - $median) / ($stdDev - $median);
            }
        }if ($type === "weight"){
            if ( $weight < $median ){
                $zScore = ($weight - $median) / ($median - $stdDev);
            }else{
                $zScore = ($weight - $median) / ($stdDev - $median);
            }
        }
        else {
            if ( $height < $median ){
                $zScore = ($height - $median) / ($median - $stdDev);
            }else{
                $zScore = ($height - $median) / ($stdDev - $median);
            }
        }
        $zScore = round($zScore, 2);
      
        // Determine status
        $status = $this->determineStatus($zScore, $type);
    
        // Redirect to the result page with dynamic type in the URL
        return redirect()->route('result', ['type' => $type])
            ->with(['z_score' => $zScore, 'status' => $status, 'height' => $height, 'weight' => $weight, 'age' => $ageMonths]);
    }
    
    private function getStandardData($type, $gender, $ageMonths, $height)
    {
        switch ($type) {
            case 'weight':
                return WeightForAgeStandard::where('gender', $gender)
                    ->where('age_months', $ageMonths)
                    ->first();
            case 'height':
                return HeightForAgeStandard::where('gender', $gender)
                    ->where('age_months', $ageMonths)
                    ->first();
            case 'weight-for-height':
                return WeightForHeightStandard::where('gender', $gender)
                    ->where('wfh', $height)
                    ->first();
            default:
                return null;
        }
    }

    private function determineStatus($zScore, $type)
    {
        if (!in_array($type, ['weight', 'height', 'weight-for-height'])) {
            throw new \InvalidArgumentException('Invalid type specified');
        }

        switch ($type) {
            case 'weight':
                switch (true) {
                    case ($zScore < -3):
                        $status = 'Severely Underweight';
                        break;
                    case ($zScore >= -3 && $zScore < -2):
                        $status = 'Underweight';
                        break;
                    case ($zScore >= -2 && $zScore <= 1):
                        $status = 'Normal';
                        break;
                    default:
                        $status = 'Overweight';
                        break;
                }
                break;

            case 'height':
                switch (true) {
                    case ($zScore < -3):
                        $status = 'Severely Stunted';
                        break;
                    case ($zScore >= -3 && $zScore < -2):
                        $status = 'Stunted';
                        break;
                    case ($zScore >= -2 && $zScore <= 3):
                        $status = 'Normal';
                        break;
                    default:
                        $status = 'Tall';
                        break;
                }
                break;
            case 'weight-for-height':
                switch (true) {
                        case ($zScore < -3):
                            $status = 'Severely Wasted';
                            break;
                        case ($zScore >= -3 && $zScore < -2):
                            $status = 'Wasted';
                            break;
                        case ($zScore >= -2 && $zScore <= 1):
                            $status = 'Normal';
                            break;
                        case ($zScore > 1 && $zScore <= 2):
                            $status = 'Possible Risk of Overweight';
                            break;
                        case ($zScore > 2 && $zScore <= 3):
                            $status = 'Overweight';
                            break;
                        default:
                            $status = 'Obese';
                            break;
                    }
                    break;
        
            default:
                throw new \InvalidArgumentException('Unknown type specified');
        }

        return $status;
    }

    public function result(Request $request, $type)
    {
        $zScore = session('z_score');
        $status = session('status');

        return view('nutrition.result', [
            'z_score' => $zScore,
            'status' => $status,
            'type' => $type,
        ]);
    }
}
