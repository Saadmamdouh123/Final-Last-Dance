<?php

namespace App\Http\Controllers;

use App\Models\GymSession;
use Illuminate\Http\Request;

class GymSessionController extends Controller
{
    //
    public function create()
    {
        return view('session.create'); // Display the form
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'capacity' => 'required|integer|min:1',
            'user_id'=>"required"
        ]);

        // Store the session
        GymSession::create($request->all());

        return redirect()->route('sessions.create')->with('success', 'Session created successfully!');
    }
}
