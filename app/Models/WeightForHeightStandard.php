<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightForHeightStandard extends Model
{
    use HasFactory;
    protected $table = "weight_for_height_standards";
    protected $fillable = [
        'gender',
        'wfh',
        'minus_3_sd',
        'minus_2_sd',
        'minus_1_sd',
        'median',
        'plus_1_sd',
        'plus_2_sd',
        'plus_3_sd',
    ];

}
