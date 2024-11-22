<?php

namespace App\Http\Controllers;

use App\Models\CalorieCalculation;
use Illuminate\Http\Request;

class CalorieCalculatorController extends Controller
{
    //
    public function index()
    {   

        return view('calorie_calculator.index');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'gender' => 'required|in:male,female',
            'weight' => 'required|numeric|min:1',
            'height' => 'required|numeric|min:1',
            'activity_level' => 'required|in:sedentary,light,moderate,active,very_active',
        ]);

        $data = $request->all();
        $data['calories_needed'] = CalorieCalculation::calculateCalories($data);

        // Save to database
        $calculation = CalorieCalculation::create($data);

        return view('calorie_calculator.result', compact('calculation'));
    }
}
