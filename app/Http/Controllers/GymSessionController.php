<?php

namespace App\Http\Controllers;

use App\Models\GymSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GymSessionController extends Controller
{
    //
    public function createe()
    {

        $events = GymSession::all();

        $events = $events->map(function ($e) {
            return [
                "start" => $e->start_time,
                "end" => $e->end_time,
                "color" => "#fcc102",
                "passed" => false,
                "title" => $e->name
            ];
        });

        return response()->json([
            "events" => $events
        ]);
    }
    public function create()
    {

        return view('session.create');
    }

    public function store(Request $request, GymSession $gymSession)
    {
       
        // Validate the input
        request()->validate([
            'name' => 'required|string|max:255',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'capacity' => 'required|integer|min:1',
            'user_id' => "required"
        ]);


        // Store the session
        GymSession::create([
            'name' => $request->name,
            'start_time' => $request->start_time . ":00",
            'end_time' => $request->end_time . ":00",
            'capacity' => $request->capacity,
            'user_id' => $request->user_id
        ]);


        return back()->with('success', 'Session created successfully!');
    }
}
