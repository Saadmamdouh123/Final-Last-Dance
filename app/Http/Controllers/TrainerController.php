<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\User;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'name'=>"required",
            'lastName'=>"required",
            'email'=>'required|email',
            "phone"=>'required',
            'user_id'=>'required'
        ]);

        Trainer::create([
            "name"=>$request->name,
            "lastName"=>$request->lastName,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "payment"=>$request->payment,
            "user_id"=>$request->user_id
        ]);

        return redirect(route('checkout'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Trainer $trainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trainer $trainer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trainer $trainer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $trainer)
    {
        //
        $trainer->delete();
        return back();
    }
}
