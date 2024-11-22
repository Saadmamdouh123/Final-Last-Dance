<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $users = User::all();
        $trainers = Trainer::all();
        return view('admin',compact('users','trainers'));
    }

    public function destroy(Trainer $id)
{
    // Find the trainer by ID
    // $trainer = Trainer::findOrFail($id);

    // Delete the trainer
    $id->delete();

    // Redirect with success message
    return back();
}


}
