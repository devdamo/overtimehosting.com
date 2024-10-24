<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class PermissionsController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.permissions.index', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'role' => 'required|in:user,mod,admin,owner'
        ]);

        $user = User::find($request->user_id);
        $user->role = $request->role;
        $user->save();

        return redirect()->back()->with('success', 'Permissions updated successfully.');
    }
}
