<?php

namespace App\Http\Controllers;

use App\Models\Comment; // Ensure this import statement is here
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'content' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);

        Comment::create($request->only('task_id', 'content', 'user_id'));

        return redirect()->back();
    }
}
