<?php

namespace Database\Seeders;

use App\Models\LengthForAgeStandard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LengthForAgeStandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('length_for_age_standards')->truncate();
        $data = [
        ['gender' => 'male', 'age_months' => 0,   'minus_3_sd' => 44.2, 'minus_2_sd' => 46.1, 'minus_1_sd' => 48.0, 'median' => 49.9, 'plus_1_sd' => 51.8, 'plus_2_sd' => 53.7, 'plus_3_sd' => 55.6],
            ['gender' => 'male', 'age_months' => 1,   'minus_3_sd' => 48.9, 'minus_2_sd' => 50.8, 'minus_1_sd' => 52.8, 'median' => 54.7, 'plus_1_sd' => 56.7, 'plus_2_sd' => 58.6, 'plus_3_sd' => 60.6],
            ['gender' => 'male', 'age_months' => 2,   'minus_3_sd' => 52.4, 'minus_2_sd' => 54.4, 'minus_1_sd' => 56.4, 'median' => 58.4, 'plus_1_sd' => 60.4, 'plus_2_sd' => 62.4, 'plus_3_sd' => 64.4],
            ['gender' => 'male', 'age_months' => 3,   'minus_3_sd' => 55.3, 'minus_2_sd' => 57.3, 'minus_1_sd' => 59.4, 'median' => 61.4, 'plus_1_sd' => 63.5, 'plus_2_sd' => 65.5, 'plus_3_sd' => 67.6],
            ['gender' => 'male', 'age_months' => 4,   'minus_3_sd' => 57.6, 'minus_2_sd' => 59.7, 'minus_1_sd' => 61.8, 'median' => 63.9, 'plus_1_sd' => 66.0, 'plus_2_sd' => 68.0, 'plus_3_sd' => 70.1],
            ['gender' => 'male', 'age_months' => 5,   'minus_3_sd' => 59.6, 'minus_2_sd' => 61.7, 'minus_1_sd' => 63.8, 'median' => 65.9, 'plus_1_sd' => 68.0, 'plus_2_sd' => 70.1, 'plus_3_sd' => 72.2],
            ['gender' => 'male', 'age_months' => 6,   'minus_3_sd' => 61.2, 'minus_2_sd' => 63.3, 'minus_1_sd' => 65.5, 'median' => 67.6, 'plus_1_sd' => 69.8, 'plus_2_sd' => 71.9, 'plus_3_sd' => 74.0],
            ['gender' => 'male', 'age_months' => 7,   'minus_3_sd' => 62.7, 'minus_2_sd' => 64.8, 'minus_1_sd' => 67.0, 'median' => 69.2, 'plus_1_sd' => 71.3, 'plus_2_sd' => 73.5, 'plus_3_sd' => 75.7],
            ['gender' => 'male', 'age_months' => 8,   'minus_3_sd' => 64.0, 'minus_2_sd' => 66.2, 'minus_1_sd' => 68.4, 'median' => 70.6, 'plus_1_sd' => 72.8, 'plus_2_sd' => 75.0, 'plus_3_sd' => 77.2],
            ['gender' => 'male', 'age_months' => 9,   'minus_3_sd' => 65.2, 'minus_2_sd' => 67.5, 'minus_1_sd' => 69.7, 'median' => 72.0, 'plus_1_sd' => 74.2, 'plus_2_sd' => 76.5, 'plus_3_sd' => 78.7],
            ['gender' => 'male', 'age_months' => 10,  'minus_3_sd' => 66.4, 'minus_2_sd' => 68.7, 'minus_1_sd' => 71.0, 'median' => 73.3, 'plus_1_sd' => 75.6, 'plus_2_sd' => 77.9, 'plus_3_sd' => 80.1],
            ['gender' => 'male', 'age_months' => 11,  'minus_3_sd' => 67.6, 'minus_2_sd' => 69.9, 'minus_1_sd' => 72.2, 'median' => 74.5, 'plus_1_sd' => 76.9, 'plus_2_sd' => 79.2, 'plus_3_sd' => 81.5],
            ['gender' => 'male', 'age_months' => 12,  'minus_3_sd' => 68.6, 'minus_2_sd' => 71.0, 'minus_1_sd' => 73.4, 'median' => 75.7, 'plus_1_sd' => 78.1, 'plus_2_sd' => 80.5, 'plus_3_sd' => 82.9],
            ['gender' => 'male', 'age_months' => 13,  'minus_3_sd' => 69.6, 'minus_2_sd' => 72.1, 'minus_1_sd' => 74.5, 'median' => 76.9, 'plus_1_sd' => 79.3, 'plus_2_sd' => 81.8, 'plus_3_sd' => 84.2],
            ['gender' => 'male', 'age_months' => 14,  'minus_3_sd' => 70.6, 'minus_2_sd' => 73.1, 'minus_1_sd' => 75.6, 'median' => 78.0, 'plus_1_sd' => 80.5, 'plus_2_sd' => 83.0, 'plus_3_sd' => 85.5],
            ['gender' => 'male', 'age_months' => 15,  'minus_3_sd' => 71.6, 'minus_2_sd' => 74.1, 'minus_1_sd' => 76.6, 'median' => 79.1, 'plus_1_sd' => 81.7, 'plus_2_sd' => 84.2, 'plus_3_sd' => 86.7],
            ['gender' => 'male', 'age_months' => 16,  'minus_3_sd' => 72.5, 'minus_2_sd' => 75.0, 'minus_1_sd' => 77.6, 'median' => 80.2, 'plus_1_sd' => 82.8, 'plus_2_sd' => 85.4, 'plus_3_sd' => 88.0],
            ['gender' => 'male', 'age_months' => 17,  'minus_3_sd' => 73.3, 'minus_2_sd' => 76.0, 'minus_1_sd' => 78.6, 'median' => 81.2, 'plus_1_sd' => 83.9, 'plus_2_sd' => 86.5, 'plus_3_sd' => 89.2],
            ['gender' => 'male', 'age_months' => 18,  'minus_3_sd' => 74.2, 'minus_2_sd' => 76.9, 'minus_1_sd' => 79.6, 'median' => 82.3, 'plus_1_sd' => 85.0, 'plus_2_sd' => 87.7, 'plus_3_sd' => 90.4],
            ['gender' => 'male', 'age_months' => 19,  'minus_3_sd' => 75.0, 'minus_2_sd' => 77.7, 'minus_1_sd' => 80.5, 'median' => 83.2, 'plus_1_sd' => 86.0, 'plus_2_sd' => 88.8, 'plus_3_sd' => 91.5],
            ['gender' => 'male', 'age_months' => 20,  'minus_3_sd' => 75.8, 'minus_2_sd' => 78.6, 'minus_1_sd' => 81.4, 'median' => 84.2, 'plus_1_sd' => 87.0, 'plus_2_sd' => 89.8, 'plus_3_sd' => 92.6],
            ['gender' => 'male', 'age_months' => 21,  'minus_3_sd' => 76.5, 'minus_2_sd' => 79.4, 'minus_1_sd' => 82.3, 'median' => 85.1, 'plus_1_sd' => 88.0, 'plus_2_sd' => 90.9, 'plus_3_sd' => 93.8],
            ['gender' => 'male', 'age_months' => 22,  'minus_3_sd' => 77.2, 'minus_2_sd' => 80.2, 'minus_1_sd' => 83.1, 'median' => 86.0, 'plus_1_sd' => 89.0, 'plus_2_sd' => 91.9, 'plus_3_sd' => 94.9],
            ['gender' => 'male', 'age_months' => 23,  'minus_3_sd' => 78.0, 'minus_2_sd' => 81.0, 'minus_1_sd' => 83.9, 'median' => 86.9, 'plus_1_sd' => 89.9, 'plus_2_sd' => 92.9, 'plus_3_sd' => 95.9],
            ['gender' => 'male', 'age_months' => 24,  'minus_3_sd' => 78.7, 'minus_2_sd' => 81.7, 'minus_1_sd' => 84.8, 'median' => 87.8, 'plus_1_sd' => 90.9, 'plus_2_sd' => 93.9, 'plus_3_sd' => 97.0],
            ['gender' => 'male', 'age_months' => 0,   'minus_3_sd' => 43.6, 'minus_2_sd' => 45.4, 'minus_1_sd' => 47.3, 'median' => 49.1, 'plus_1_sd' => 51.0, 'plus_2_sd' => 52.9, 'plus_3_sd' => 54.7],
            ['gender' => 'male', 'age_months' => 1,   'minus_3_sd' => 47.8, 'minus_2_sd' => 49.8, 'minus_1_sd' => 51.7, 'median' => 53.7, 'plus_1_sd' => 55.6, 'plus_2_sd' => 57.6, 'plus_3_sd' => 59.5],
            ['gender' => 'male', 'age_months' => 2,   'minus_3_sd' => 51.0, 'minus_2_sd' => 53.0, 'minus_1_sd' => 55.0, 'median' => 57.1, 'plus_1_sd' => 59.1, 'plus_2_sd' => 61.1, 'plus_3_sd' => 63.2],
            ['gender' => 'male', 'age_months' => 3,   'minus_3_sd' => 53.5, 'minus_2_sd' => 55.6, 'minus_1_sd' => 57.7, 'median' => 59.8, 'plus_1_sd' => 61.9, 'plus_2_sd' => 64.0, 'plus_3_sd' => 66.1],
            ['gender' => 'male', 'age_months' => 4,   'minus_3_sd' => 55.6, 'minus_2_sd' => 57.8, 'minus_1_sd' => 59.9, 'median' => 62.1, 'plus_1_sd' => 64.3, 'plus_2_sd' => 66.4, 'plus_3_sd' => 68.6],
            ['gender' => 'male', 'age_months' => 5,   'minus_3_sd' => 57.4, 'minus_2_sd' => 59.6, 'minus_1_sd' => 61.8, 'median' => 64.0, 'plus_1_sd' => 66.2, 'plus_2_sd' => 68.5, 'plus_3_sd' => 70.7],
            ['gender' => 'male', 'age_months' => 6,   'minus_3_sd' => 58.9, 'minus_2_sd' => 61.2, 'minus_1_sd' => 63.5, 'median' => 65.7, 'plus_1_sd' => 68.0, 'plus_2_sd' => 70.3, 'plus_3_sd' => 72.5],
            ['gender' => 'male', 'age_months' => 7,   'minus_3_sd' => 60.3, 'minus_2_sd' => 62.7, 'minus_1_sd' => 65.0, 'median' => 67.3, 'plus_1_sd' => 69.6, 'plus_2_sd' => 71.9, 'plus_3_sd' => 74.2],
            ['gender' => 'male', 'age_months' => 8,   'minus_3_sd' => 61.7, 'minus_2_sd' => 64.0, 'minus_1_sd' => 66.4, 'median' => 68.7, 'plus_1_sd' => 71.1, 'plus_2_sd' => 73.5, 'plus_3_sd' => 75.8],
            ['gender' => 'male', 'age_months' => 9,   'minus_3_sd' => 62.9, 'minus_2_sd' => 65.3, 'minus_1_sd' => 67.7, 'median' => 70.1, 'plus_1_sd' => 72.6, 'plus_2_sd' => 75.0, 'plus_3_sd' => 77.4],
            ['gender' => 'male', 'age_months' => 10,  'minus_3_sd' => 64.1, 'minus_2_sd' => 66.5, 'minus_1_sd' => 69.0, 'median' => 71.5, 'plus_1_sd' => 73.9, 'plus_2_sd' => 76.4, 'plus_3_sd' => 78.9],
            ['gender' => 'male', 'age_months' => 11,  'minus_3_sd' => 65.2, 'minus_2_sd' => 67.7, 'minus_1_sd' => 70.3, 'median' => 72.8, 'plus_1_sd' => 75.3, 'plus_2_sd' => 77.8, 'plus_3_sd' => 80.3],
            ['gender' => 'male', 'age_months' => 12,  'minus_3_sd' => 66.3, 'minus_2_sd' => 68.9, 'minus_1_sd' => 71.4, 'median' => 74.0, 'plus_1_sd' => 76.6, 'plus_2_sd' => 79.2, 'plus_3_sd' => 81.7],
            ['gender' => 'male', 'age_months' => 13,  'minus_3_sd' => 67.3, 'minus_2_sd' => 70.0, 'minus_1_sd' => 72.6, 'median' => 75.2, 'plus_1_sd' => 77.8, 'plus_2_sd' => 80.5, 'plus_3_sd' => 83.1],
            ['gender' => 'male', 'age_months' => 14,  'minus_3_sd' => 68.3, 'minus_2_sd' => 71.0, 'minus_1_sd' => 73.7, 'median' => 76.4, 'plus_1_sd' => 79.1, 'plus_2_sd' => 81.7, 'plus_3_sd' => 84.4],
            ['gender' => 'male', 'age_months' => 15,  'minus_3_sd' => 69.3, 'minus_2_sd' => 72.0, 'minus_1_sd' => 74.8, 'median' => 77.5, 'plus_1_sd' => 80.2, 'plus_2_sd' => 83.0, 'plus_3_sd' => 85.7],
            ['gender' => 'male', 'age_months' => 16,  'minus_3_sd' => 70.2, 'minus_2_sd' => 73.0, 'minus_1_sd' => 75.8, 'median' => 78.6, 'plus_1_sd' => 81.4, 'plus_2_sd' => 84.2, 'plus_3_sd' => 87.0],
            ['gender' => 'male', 'age_months' => 17,  'minus_3_sd' => 71.1, 'minus_2_sd' => 74.0, 'minus_1_sd' => 76.8, 'median' => 79.7, 'plus_1_sd' => 82.5, 'plus_2_sd' => 85.4, 'plus_3_sd' => 88.2],
            ['gender' => 'male', 'age_months' => 18,  'minus_3_sd' => 72.0, 'minus_2_sd' => 74.9, 'minus_1_sd' => 77.8, 'median' => 80.7, 'plus_1_sd' => 83.6, 'plus_2_sd' => 86.5, 'plus_3_sd' => 89.4],
            ['gender' => 'male', 'age_months' => 19,  'minus_3_sd' => 72.8, 'minus_2_sd' => 75.8, 'minus_1_sd' => 78.8, 'median' => 81.7, 'plus_1_sd' => 84.7, 'plus_2_sd' => 87.6, 'plus_3_sd' => 90.6],
            ['gender' => 'male', 'age_months' => 20,  'minus_3_sd' => 73.7, 'minus_2_sd' => 76.7, 'minus_1_sd' => 79.7, 'median' => 82.7, 'plus_1_sd' => 85.7, 'plus_2_sd' => 88.7, 'plus_3_sd' => 91.7],
            ['gender' => 'male', 'age_months' => 21,  'minus_3_sd' => 74.5, 'minus_2_sd' => 77.5, 'minus_1_sd' => 80.6, 'median' => 83.7, 'plus_1_sd' => 86.7, 'plus_2_sd' => 89.8, 'plus_3_sd' => 92.9],
            ['gender' => 'male', 'age_months' => 22,  'minus_3_sd' => 75.2, 'minus_2_sd' => 78.4, 'minus_1_sd' => 81.5, 'median' => 84.6, 'plus_1_sd' => 87.7, 'plus_2_sd' => 90.8, 'plus_3_sd' => 94.0],
            ['gender' => 'male', 'age_months' => 23,  'minus_3_sd' => 76.0, 'minus_2_sd' => 79.2, 'minus_1_sd' => 82.3, 'median' => 85.5, 'plus_1_sd' => 88.7, 'plus_2_sd' => 91.9, 'plus_3_sd' => 95.0],
            ['gender' => 'male', 'age_months' => 24,  'minus_3_sd' => 76.7, 'minus_2_sd' => 80.0, 'minus_1_sd' => 83.2, 'median' => 86.4, 'plus_1_sd' => 89.6, 'plus_2_sd' => 92.9, 'plus_3_sd' => 96.1],
        ];
        LengthForAgeStandard::insert($data);
        }

}
