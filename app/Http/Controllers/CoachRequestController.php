<?php

namespace App\Http\Controllers;

use App\Models\CoachRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoachRequestController extends Controller
{
    public function store()
    {
        // Check if the user already has a pending request
        if (CoachRequest::where('user_id', Auth::id())->where('status', 'pending')->exists()) {
            return redirect()->back()->with('error', 'You already have a pending request.');
        }

        // Create the request
        CoachRequest::create([
            'user_id' => Auth::id(),
        ]);

        // Update user role to "coach"
        $user = Auth::user();
        if ($user->hasRole('user')) { // Check if the user has the "user" role
            $user->removeRole('user'); // Remove the "user" role
        }
        $user->assignRole('coach'); // Assign the "coach" role

        return redirect()->back()->with('success', 'Your request to become a coach has been submitted and your role has been updated.');
    }
}
