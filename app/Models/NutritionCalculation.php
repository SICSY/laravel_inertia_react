<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionCalculation extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'age', 'weight', 'height', 'bmi'];
}
