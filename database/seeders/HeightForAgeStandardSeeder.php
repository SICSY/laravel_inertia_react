<?php

namespace Database\Seeders;

use App\Models\HeightForAgeStandard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HeightForAgeStandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("Height_for_age_standards")->truncate();
        $data = [
            ['gender' => 'male', 'age_months' => 24, 'minus_3_sd' => 78.0, 'minus_2_sd' => 81.0, 'minus_1_sd' => 84.1, 'median' => 87.1, 'plus_1_sd' => 90.2, 'plus_2_sd' => 93.2, 'plus_3_sd' => 96.3],
            ['gender' => 'male', 'age_months' => 25, 'minus_3_sd' => 78.6, 'minus_2_sd' => 81.7, 'minus_1_sd' => 84.9, 'median' => 88.0, 'plus_1_sd' => 91.1, 'plus_2_sd' => 94.2, 'plus_3_sd' => 97.3],
            ['gender' => 'male', 'age_months' => 26, 'minus_3_sd' => 79.3, 'minus_2_sd' => 82.5, 'minus_1_sd' => 85.6, 'median' => 88.8, 'plus_1_sd' => 92.0, 'plus_2_sd' => 95.2, 'plus_3_sd' => 98.3],
            ['gender' => 'male', 'age_months' => 27, 'minus_3_sd' => 79.9, 'minus_2_sd' => 83.1, 'minus_1_sd' => 86.4, 'median' => 89.6, 'plus_1_sd' => 92.9, 'plus_2_sd' => 96.1, 'plus_3_sd' => 99.3],
            ['gender' => 'male', 'age_months' => 28, 'minus_3_sd' => 80.5, 'minus_2_sd' => 83.8, 'minus_1_sd' => 87.1, 'median' => 90.4, 'plus_1_sd' => 93.7, 'plus_2_sd' => 97.0, 'plus_3_sd' => 100.3],
            ['gender' => 'male', 'age_months' => 29, 'minus_3_sd' => 81.1, 'minus_2_sd' => 84.5, 'minus_1_sd' => 87.8, 'median' => 91.2, 'plus_1_sd' => 94.5, 'plus_2_sd' => 97.9, 'plus_3_sd' => 101.2],
            ['gender' => 'male', 'age_months' => 30, 'minus_3_sd' => 81.7, 'minus_2_sd' => 85.1, 'minus_1_sd' => 88.5, 'median' => 91.9, 'plus_1_sd' => 95.3, 'plus_2_sd' => 98.7, 'plus_3_sd' => 102.1],
            ['gender' => 'male', 'age_months' => 31, 'minus_3_sd' => 82.3, 'minus_2_sd' => 85.7, 'minus_1_sd' => 89.2, 'median' => 92.7, 'plus_1_sd' => 96.1, 'plus_2_sd' => 99.6, 'plus_3_sd' => 103.0],
            ['gender' => 'male', 'age_months' => 32, 'minus_3_sd' => 82.8, 'minus_2_sd' => 86.4, 'minus_1_sd' => 89.9, 'median' => 93.4, 'plus_1_sd' => 96.9, 'plus_2_sd' => 100.4, 'plus_3_sd' => 103.9],
            ['gender' => 'male', 'age_months' => 33, 'minus_3_sd' => 83.4, 'minus_2_sd' => 86.9, 'minus_1_sd' => 90.5, 'median' => 94.1, 'plus_1_sd' => 97.6, 'plus_2_sd' => 101.2, 'plus_3_sd' => 104.8],
            ['gender' => 'male', 'age_months' => 34, 'minus_3_sd' => 83.9, 'minus_2_sd' => 87.5, 'minus_1_sd' => 91.1, 'median' => 94.8, 'plus_1_sd' => 98.4, 'plus_2_sd' => 102.0, 'plus_3_sd' => 105.6],
            ['gender' => 'male', 'age_months' => 35, 'minus_3_sd' => 84.4, 'minus_2_sd' => 88.1, 'minus_1_sd' => 91.8, 'median' => 95.4, 'plus_1_sd' => 99.1, 'plus_2_sd' => 102.7, 'plus_3_sd' => 106.4],
            ['gender' => 'male', 'age_months' => 36, 'minus_3_sd' => 85.0, 'minus_2_sd' => 88.7, 'minus_1_sd' => 92.4, 'median' => 96.1, 'plus_1_sd' => 99.8, 'plus_2_sd' => 103.5, 'plus_3_sd' => 107.2],
            ['gender' => 'male', 'age_months' => 37, 'minus_3_sd' => 85.5, 'minus_2_sd' => 89.2, 'minus_1_sd' => 93.0, 'median' => 96.7, 'plus_1_sd' => 100.5, 'plus_2_sd' => 104.2, 'plus_3_sd' => 108.0],
            ['gender' => 'male', 'age_months' => 38, 'minus_3_sd' => 86.0, 'minus_2_sd' => 89.8, 'minus_1_sd' => 93.6, 'median' => 97.4, 'plus_1_sd' => 101.2, 'plus_2_sd' => 105.0, 'plus_3_sd' => 108.8],
            ['gender' => 'male', 'age_months' => 39, 'minus_3_sd' => 86.5, 'minus_2_sd' => 90.3, 'minus_1_sd' => 94.2, 'median' => 98.0, 'plus_1_sd' => 101.8, 'plus_2_sd' => 105.7, 'plus_3_sd' => 109.5],
            ['gender' => 'male', 'age_months' => 40, 'minus_3_sd' => 87.0, 'minus_2_sd' => 90.9, 'minus_1_sd' => 94.7, 'median' => 98.6, 'plus_1_sd' => 102.5, 'plus_2_sd' => 106.4, 'plus_3_sd' => 110.3],
            ['gender' => 'male', 'age_months' => 41, 'minus_3_sd' => 87.5, 'minus_2_sd' => 91.4, 'minus_1_sd' => 95.3, 'median' => 99.2, 'plus_1_sd' => 103.2, 'plus_2_sd' => 107.1, 'plus_3_sd' => 111.0],
            ['gender' => 'male', 'age_months' => 42, 'minus_3_sd' => 88.0, 'minus_2_sd' => 91.9, 'minus_1_sd' => 95.9, 'median' => 99.9, 'plus_1_sd' => 103.8, 'plus_2_sd' => 107.8, 'plus_3_sd' => 111.7],
            ['gender' => 'male', 'age_months' => 43, 'minus_3_sd' => 88.4, 'minus_2_sd' => 92.4, 'minus_1_sd' => 96.4, 'median' => 100.4, 'plus_1_sd' => 104.5, 'plus_2_sd' => 108.5, 'plus_3_sd' => 112.5],
            ['gender' => 'male', 'age_months' => 44, 'minus_3_sd' => 88.9, 'minus_2_sd' => 93.0, 'minus_1_sd' => 97.0, 'median' => 101.0, 'plus_1_sd' => 105.1, 'plus_2_sd' => 109.1, 'plus_3_sd' => 113.2],
            ['gender' => 'male', 'age_months' => 45, 'minus_3_sd' => 89.4, 'minus_2_sd' => 93.5, 'minus_1_sd' => 97.5, 'median' => 101.6, 'plus_1_sd' => 105.7, 'plus_2_sd' => 109.8, 'plus_3_sd' => 113.9],
            ['gender' => 'male', 'age_months' => 46, 'minus_3_sd' => 89.8, 'minus_2_sd' => 94.0, 'minus_1_sd' => 98.1, 'median' => 102.2, 'plus_1_sd' => 106.3, 'plus_2_sd' => 110.4, 'plus_3_sd' => 114.6],
            ['gender' => 'male', 'age_months' => 47, 'minus_3_sd' => 90.3, 'minus_2_sd' => 94.4, 'minus_1_sd' => 98.6, 'median' => 102.8, 'plus_1_sd' => 106.9, 'plus_2_sd' => 111.1, 'plus_3_sd' => 115.2],
            ['gender' => 'male', 'age_months' => 48, 'minus_3_sd' => 90.7, 'minus_2_sd' => 94.9, 'minus_1_sd' => 99.1, 'median' => 103.3, 'plus_1_sd' => 107.5, 'plus_2_sd' => 111.7, 'plus_3_sd' => 115.9],
            ['gender' => 'male', 'age_months' => 49, 'minus_3_sd' => 91.2, 'minus_2_sd' => 95.4, 'minus_1_sd' => 99.7, 'median' => 103.9, 'plus_1_sd' => 108.1, 'plus_2_sd' => 112.4, 'plus_3_sd' => 116.6],
            ['gender' => 'male', 'age_months' => 50, 'minus_3_sd' => 91.6, 'minus_2_sd' => 95.9, 'minus_1_sd' => 100.2, 'median' => 104.4, 'plus_1_sd' => 108.7, 'plus_2_sd' => 113.0, 'plus_3_sd' => 117.3],
            ['gender' => 'male', 'age_months' => 51, 'minus_3_sd' => 92.1, 'minus_2_sd' => 96.4, 'minus_1_sd' => 100.7, 'median' => 105.0, 'plus_1_sd' => 109.3, 'plus_2_sd' => 113.6, 'plus_3_sd' => 117.9],
            ['gender' => 'male', 'age_months' => 52, 'minus_3_sd' => 92.5, 'minus_2_sd' => 96.9, 'minus_1_sd' => 101.2, 'median' => 105.6, 'plus_1_sd' => 109.9, 'plus_2_sd' => 114.2, 'plus_3_sd' => 118.6],
            ['gender' => 'male', 'age_months' => 53, 'minus_3_sd' => 93.0, 'minus_2_sd' => 97.4, 'minus_1_sd' => 101.7, 'median' => 106.1, 'plus_1_sd' => 110.5, 'plus_2_sd' => 114.9, 'plus_3_sd' => 119.2],
            ['gender' => 'male', 'age_months' => 54, 'minus_3_sd' => 93.4, 'minus_2_sd' => 97.8, 'minus_1_sd' => 102.3, 'median' => 106.7, 'plus_1_sd' => 111.1, 'plus_2_sd' => 115.5, 'plus_3_sd' => 119.9],
            ['gender' => 'male', 'age_months' => 55, 'minus_3_sd' => 93.9, 'minus_2_sd' => 98.3, 'minus_1_sd' => 102.8, 'median' => 107.2, 'plus_1_sd' => 111.7, 'plus_2_sd' => 116.1, 'plus_3_sd' => 120.6],
            ['gender' => 'male', 'age_months' => 56, 'minus_3_sd' => 94.3, 'minus_2_sd' => 98.8, 'minus_1_sd' => 103.3, 'median' => 107.8, 'plus_1_sd' => 112.3, 'plus_2_sd' => 116.7, 'plus_3_sd' => 121.2],
            ['gender' => 'male', 'age_months' => 57, 'minus_3_sd' => 94.7, 'minus_2_sd' => 99.3, 'minus_1_sd' => 103.8, 'median' => 108.3, 'plus_1_sd' => 112.8, 'plus_2_sd' => 117.4, 'plus_3_sd' => 121.9],
            ['gender' => 'male', 'age_months' => 58, 'minus_3_sd' => 95.2, 'minus_2_sd' => 99.7, 'minus_1_sd' => 104.3, 'median' => 108.9, 'plus_1_sd' => 113.4, 'plus_2_sd' => 118.0, 'plus_3_sd' => 122.6],
            ['gender' => 'male', 'age_months' => 59, 'minus_3_sd' => 95.6, 'minus_2_sd' => 100.2, 'minus_1_sd' => 104.8, 'median' => 109.4, 'plus_1_sd' => 114.0, 'plus_2_sd' => 118.6, 'plus_3_sd' => 123.2],
            ['gender' => 'male', 'age_months' => 60, 'minus_3_sd' => 96.1, 'minus_2_sd' => 100.7, 'minus_1_sd' => 105.3, 'median' => 110.0, 'plus_1_sd' => -114.6, 'plus_2_sd' => 119.2, 'plus_3_sd' => 123.9],
             ['gender' => 'male', 'age_months' => 24, 'minus_3_sd' => 78.0, 'minus_2_sd' => 81.0, 'minus_1_sd' => 84.1, 'median' => 87.1, 'plus_1_sd' => 90.2, 'plus_2_sd' => 93.2, 'plus_3_sd' => 96.3],
    ['gender' => 'female', 'age_months' => 25, 'minus_3_sd' => 78.7, 'minus_2_sd' => 81.8, 'minus_1_sd' => 84.9, 'median' => 88.0, 'plus_1_sd' => 91.2, 'plus_2_sd' => 94.3, 'plus_3_sd' => 97.4],
    ['gender' => 'female', 'age_months' => 26, 'minus_3_sd' => 79.3, 'minus_2_sd' => 82.5, 'minus_1_sd' => 85.6, 'median' => 88.8, 'plus_1_sd' => 92.0, 'plus_2_sd' => 95.2, 'plus_3_sd' => 98.3],
    ['gender' => 'female', 'age_months' => 27, 'minus_3_sd' => 79.9, 'minus_2_sd' => 83.1, 'minus_1_sd' => 86.4, 'median' => 89.6, 'plus_1_sd' => 92.9, 'plus_2_sd' => 96.1, 'plus_3_sd' => 99.3],
    ['gender' => 'female', 'age_months' => 28, 'minus_3_sd' => 80.5, 'minus_2_sd' => 83.8, 'minus_1_sd' => 87.1, 'median' => 90.4, 'plus_1_sd' => 93.7, 'plus_2_sd' => 97.0, 'plus_3_sd' => 100.3],
    ['gender' => 'female', 'age_months' => 29, 'minus_3_sd' => 81.1, 'minus_2_sd' => 84.5, 'minus_1_sd' => 87.8, 'median' => 91.2, 'plus_1_sd' => 94.5, 'plus_2_sd' => 97.9, 'plus_3_sd' => 101.2],
    ['gender' => 'female', 'age_months' => 30, 'minus_3_sd' => 81.8, 'minus_2_sd' => 85.2, 'minus_1_sd' => 88.5, 'median' => 91.9, 'plus_1_sd' => 95.3, 'plus_2_sd' => 98.7, 'plus_3_sd' => 102.1],
    ['gender' => 'female', 'age_months' => 31, 'minus_3_sd' => 82.4, 'minus_2_sd' => 85.8, 'minus_1_sd' => 89.2, 'median' => 92.7, 'plus_1_sd' => 96.1, 'plus_2_sd' => 99.6, 'plus_3_sd' => 103.0],
    ['gender' => 'female', 'age_months' => 32, 'minus_3_sd' => 83.0, 'minus_2_sd' => 86.4, 'minus_1_sd' => 89.9, 'median' => 93.4, 'plus_1_sd' => 96.9, 'plus_2_sd' => 100.4, 'plus_3_sd' => 103.9],
    ['gender' => 'female', 'age_months' => 33, 'minus_3_sd' => 83.6, 'minus_2_sd' => 87.0, 'minus_1_sd' => 90.5, 'median' => 94.1, 'plus_1_sd' => 97.6, 'plus_2_sd' => 101.2, 'plus_3_sd' => 104.8],
    ['gender' => 'female', 'age_months' => 34, 'minus_3_sd' => 84.2, 'minus_2_sd' => 87.6, 'minus_1_sd' => 91.1, 'median' => 94.8, 'plus_1_sd' => 98.4, 'plus_2_sd' => 102.0, 'plus_3_sd' => 105.6],
    ['gender' => 'female', 'age_months' => 35, 'minus_3_sd' => 84.8, 'minus_2_sd' => 88.2, 'minus_1_sd' => 91.8, 'median' => 95.4, 'plus_1_sd' => 99.1, 'plus_2_sd' => 102.7, 'plus_3_sd' => 106.4],
    ['gender' => 'female', 'age_months' => 36, 'minus_3_sd' => 85.3, 'minus_2_sd' => 88.7, 'minus_1_sd' => 92.4, 'median' => 96.1, 'plus_1_sd' => 99.8, 'plus_2_sd' => 103.5, 'plus_3_sd' => 107.2],
    ['gender' => 'female', 'age_months' => 37, 'minus_3_sd' => 85.9, 'minus_2_sd' => 89.3, 'minus_1_sd' => 93.0, 'median' => 96.7, 'plus_1_sd' => 100.5, 'plus_2_sd' => 104.3, 'plus_3_sd' => 108.0],
    ['gender' => 'female', 'age_months' => 38, 'minus_3_sd' => 86.5, 'minus_2_sd' => 89.8, 'minus_1_sd' => 93.6, 'median' => 97.4, 'plus_1_sd' => 101.2, 'plus_2_sd' => 105.0, 'plus_3_sd' => 108.8],
    ['gender' => 'female', 'age_months' => 39, 'minus_3_sd' => 87.0, 'minus_2_sd' => 90.3, 'minus_1_sd' => 94.2, 'median' => 98.0, 'plus_1_sd' => 101.8, 'plus_2_sd' => 105.7, 'plus_3_sd' => 109.5],
    ['gender' => 'female', 'age_months' => 40, 'minus_3_sd' => 87.6, 'minus_2_sd' => 90.9, 'minus_1_sd' => 94.8, 'median' => 98.6, 'plus_1_sd' => 102.5, 'plus_2_sd' => 106.4, 'plus_3_sd' => 110.3],
    ['gender' => 'female', 'age_months' => 41, 'minus_3_sd' => 88.1, 'minus_2_sd' => 91.4, 'minus_1_sd' => 95.4, 'median' => 99.2, 'plus_1_sd' => 103.2, 'plus_2_sd' => 107.1, 'plus_3_sd' => 111.0],
    ['gender' => 'female', 'age_months' => 42, 'minus_3_sd' => 88.7, 'minus_2_sd' => 91.9, 'minus_1_sd' => 96.0, 'median' => 99.9, 'plus_1_sd' => 103.8, 'plus_2_sd' => 107.8, 'plus_3_sd' => 111.7],
    ['gender' => 'female', 'age_months' => 43, 'minus_3_sd' => 89.2, 'minus_2_sd' => 92.5, 'minus_1_sd' => 96.6, 'median' => 100.5, 'plus_1_sd' => 104.5, 'plus_2_sd' => 108.6, 'plus_3_sd' => 112.6],
    ['gender' => 'female', 'age_months' => 44, 'minus_3_sd' => 89.8, 'minus_2_sd' => 93.0, 'minus_1_sd' => 97.1, 'median' => 101.1, 'plus_1_sd' => 105.1, 'plus_2_sd' => 109.2, 'plus_3_sd' => 113.2],
    ['gender' => 'female', 'age_months' => 45, 'minus_3_sd' => 90.3, 'minus_2_sd' => 93.6, 'minus_1_sd' => 97.7, 'median' => 101.7, 'plus_1_sd' => 105.7, 'plus_2_sd' => 109.8, 'plus_3_sd' => 113.8],
    ['gender' => 'female', 'age_months' => 46, 'minus_3_sd' => 90.9, 'minus_2_sd' => 94.2, 'minus_1_sd' => 98.4, 'median' => 102.2, 'plus_1_sd' => 106.3, 'plus_2_sd' => 110.4, 'plus_3_sd' => 114.5],
    ['gender' => 'female', 'age_months' => 47, 'minus_3_sd' => 91.4, 'minus_2_sd' => 94.7, 'minus_1_sd' => 98.9, 'median' => 102.8, 'plus_1_sd' => 106.9, 'plus_2_sd' => 111.1, 'plus_3_sd' => 115.2],
    ['gender' => 'female', 'age_months' => 48, 'minus_3_sd' => 91.9, 'minus_2_sd' => 95.2, 'minus_1_sd' => 99.4, 'median' => 103.3, 'plus_1_sd' => 107.4, 'plus_2_sd' => 111.7, 'plus_3_sd' => 116.0],
    ['gender' => 'female', 'age_months' => 49, 'minus_3_sd' => 92.5, 'minus_2_sd' => 95.8, 'minus_1_sd' => 100.0, 'median' => 104.0, 'plus_1_sd' => 108.1, 'plus_2_sd' => 112.4, 'plus_3_sd' => 116.7],
    ['gender' => 'female', 'age_months' => 50, 'minus_3_sd' => 93.0, 'minus_2_sd' => 96.3, 'minus_1_sd' => 100.6, 'median' => 104.5, 'plus_1_sd' => 108.7, 'plus_2_sd' => 113.0, 'plus_3_sd' => 117.3],
    ['gender' => 'female', 'age_months' => 51, 'minus_3_sd' => 93.6, 'minus_2_sd' => 96.9, 'minus_1_sd' => 101.3, 'median' => 105.0, 'plus_1_sd' => 109.3, 'plus_2_sd' => 113.6, 'plus_3_sd' => 117.9],
    ['gender' => 'female', 'age_months' => 52, 'minus_3_sd' => 94.1, 'minus_2_sd' => 97.4, 'minus_1_sd' => 101.7, 'median' => 105.5, 'plus_1_sd' => 109.8, 'plus_2_sd' => 114.1, 'plus_3_sd' => 118.4],
    ['gender' => 'female', 'age_months' => 53, 'minus_3_sd' => 94.7, 'minus_2_sd' => 98.0, 'minus_1_sd' => 102.3, 'median' => 106.1, 'plus_1_sd' => 110.5, 'plus_2_sd' => 114.8, 'plus_3_sd' => 119.2],
    ['gender' => 'female', 'age_months' => 54, 'minus_3_sd' => 95.2, 'minus_2_sd' => 98.5, 'minus_1_sd' => 102.8, 'median' => 106.7, 'plus_1_sd' => 111.1, 'plus_2_sd' => 115.4, 'plus_3_sd' => 119.7],
    ['gender' => 'female', 'age_months' => 55, 'minus_3_sd' => 95.7, 'minus_2_sd' => 99.0, 'minus_1_sd' => 103.3, 'median' => 107.3, 'plus_1_sd' => 111.7, 'plus_2_sd' => 116.1, 'plus_3_sd' => 120.6],
    ['gender' => 'female', 'age_months' => 56, 'minus_3_sd' => 96.2, 'minus_2_sd' => 99.5, 'minus_1_sd' => 103.8, 'median' => 107.8, 'plus_1_sd' => 112.3, 'plus_2_sd' => 116.6, 'plus_3_sd' => 121.1],
    ['gender' => 'female', 'age_months' => 57, 'minus_3_sd' => 96.7, 'minus_2_sd' => 100.0, 'minus_1_sd' => 104.3, 'median' => 108.4, 'plus_1_sd' => 112.9, 'plus_2_sd' => 117.3, 'plus_3_sd' => 121.8],
    ['gender' => 'female', 'age_months' => 58, 'minus_3_sd' => 97.2, 'minus_2_sd' => 100.5, 'minus_1_sd' => 104.8, 'median' => 109.0, 'plus_1_sd' => 113.6, 'plus_2_sd' => 118.1, 'plus_3_sd' => 122.7],
    ['gender' => 'female', 'age_months' => 59, 'minus_3_sd' => 97.7, 'minus_2_sd' => 101.0, 'minus_1_sd' => 105.3, 'median' => 109.6, 'plus_1_sd' => 114.2, 'plus_2_sd' => 118.7, 'plus_3_sd' => 123.3],
    ['gender' => 'female', 'age_months' => 60, 'minus_3_sd' => 98.2, 'minus_2_sd' => 101.5, 'minus_1_sd' => 105.7, 'median' => 110.1, 'plus_1_sd' => 114.7, 'plus_2_sd' => 119.2, 'plus_3_sd' => 123.8],
        ];
        HeightForAgeStandard::insert($data);
    }
}
