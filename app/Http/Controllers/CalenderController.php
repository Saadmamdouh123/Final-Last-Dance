<?php

namespace App\Http\Controllers;

use App\Models\Calender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("calender.showCalender");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $events = Calender::all();

        $events = $events->map(function ($e) {
            return [
                "start" => $e->start,
                "end" => $e->end,
                "color" => "#fcc102",
                "passed" => false,
                "title" => Auth::user()->name
            ];
        });

        return response()->json([
            "events" => $events
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            "start"=>"required",
            "end"=>"required"
        ]);

        Calender::create([
            "start"=>$request->start . ":00",
            "end"=>$request->end . ":00",
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Calender $calender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calender $calender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calender $calender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calender $calender)
    {
        //
    }
}
