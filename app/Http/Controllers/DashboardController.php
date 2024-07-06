<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
//        $projects = Project::where('user_id', $user->id)->get();
//        $tasks = Task::where('user_id', $user->id)->get();
//        $messages = Message::where('receiver_id', $user->id)->get();
//        $notifications = Notification::where('user_id', $user->id)->get();


        return view('dashboard.users.dashboard', compact('user'));
    }
    public function updateProfile(Request $request)
    {

        // Validate the request data
        $allowedFields = ['name', 'email', 'profile_image'];

        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Maximum 2MB file size
        ]);

        // Check for unexpected fields
        foreach ($request->all() as $key => $value) {
            if (!in_array($key, $allowedFields)) {
                return redirect()->back()->withErrors(['error' => 'Unexpected fields in the request.']);
            }
        }
        dd($request->all());

        // Redirect back to the user dashboard with a success message
        return redirect()->route('user.dashboard')->with('status', 'Profile updated!');
    }
}
