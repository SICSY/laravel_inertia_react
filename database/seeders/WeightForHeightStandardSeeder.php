<?php

namespace Database\Seeders;

use App\Models\WeightForHeightStandard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class WeightForHeightStandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('weight_for_height_standards')->truncate();
        $data = [
            ['gender' => 'male', 'wfh' => 45.0, 'minus_3_sd' => 1.9, 'minus_2_sd' => 2.0, 'minus_1_sd' => 2.2, 'median' => 2.4, 'plus_1_sd' => 2.7, 'plus_2_sd' => 3.0, 'plus_3_sd' => 3.3],
        
        ];
     
        WeightForHeightStandard::insert($data);
        dd($data); 

    }
}
