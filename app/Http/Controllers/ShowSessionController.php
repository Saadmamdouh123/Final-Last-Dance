<?php

namespace App\Http\Controllers;

use App\Models\GymSession;
use Illuminate\Http\Request;

class ShowSessionController extends Controller
{
    //
    public function index (){
        $showSessions = GymSession::all();
        return view("session.show",compact('showSessions'));
    }
}
