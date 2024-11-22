<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalorieCalculation extends Model
{
    //
    protected $fillable = ['name', 'age', 'gender', 'weight', 'height', 'activity_level', 'calories_needed'];
    public static function calculateCalories($data)
    {
        // Calculate BMR using Mifflin-St Jeor Equation
        if ($data['gender'] === 'male') {
            $bmr = 10 * $data['weight'] + 6.25 * $data['height'] - 5 * $data['age'] + 5;
        } else {
            $bmr = 10 * $data['weight'] + 6.25 * $data['height'] - 5 * $data['age'] - 161;
        }

        // Adjust for activity level
        $activityFactors = [
            'sedentary' => 1.2,
            'light' => 1.375,
            'moderate' => 1.55,
            'active' => 1.725,
            'very_active' => 1.9,
        ];

        $calories = $bmr * $activityFactors[$data['activity_level']];

        return round($calories);
    }
}
