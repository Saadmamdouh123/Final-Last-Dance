<?php

namespace App\Http\Controllers;

use App\Models\CalorieCalculation;
use App\Models\CoachRequest;
use App\Models\GymSession;
use App\Models\Trainer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class AdminController extends Controller
{
    //
    public function index(){
        $users = User::all();
        $trainers = Trainer::all();
        $userCount = User::count();
        $trainerCount = Trainer::count();
        $requests = CoachRequest::with('user')->where('status', 'pending')->get();        
        
        return view('admin',compact('users','trainers','userCount','trainerCount','requests'));
    }
    public function create()
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

    public function destroy(Trainer $id)
{
    // Find the trainer by ID
    // $trainer = Trainer::findOrFail($id);

    // Delete the trainer
    $id->delete();

    // Redirect with success message
    return back();
}

// public function viewRequests()
// {
//     $requests = \App\Models\CoachRequest::with('user')->where('status', 'pending')->get();

//     return view('admin', compact('requests'));
// }
public function update(Request $request, User $user)
{
    // Find the user by ID
    $userToUpdate = User::find($request->user_id);

    if ($userToUpdate) {
        // Find the coach request associated with the user
        $coachRequest = CoachRequest::where('user_id', $userToUpdate->id)->first();

        if ($coachRequest) {
            // Update the status of the coach request
            $coachRequest->status = 'accept';
            $coachRequest->save();

            return Redirect(route('sessions.create'));  
        }

        // Handle case where no CoachRequest exists for the user
        return back()->with('error', 'No coach request found for this user.');
    }

    // Handle case where user doesn't exist
    return back()->with('error', 'User not found!');
}



}
