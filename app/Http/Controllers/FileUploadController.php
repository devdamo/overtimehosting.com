<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $path = $request->file('image')->store('uploads', 'public');

            return response()->json([
                'success' => 1,
                'file' => [
                    'url' => Storage::url($path)
                ]
            ]);
        }

        return response()->json(['success' => 0, 'error' => 'File upload failed'], 400);
    }
}
