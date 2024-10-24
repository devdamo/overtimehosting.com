<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function uploadImage(Request $request)
    {
        // Validate that the uploaded file is an image
        $request->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png|max:2048', // max size of 2MB
        ]);

        // Store the image in the 'public/images' directory
        $image = $request->file('file');
        $path = $image->store('images', 'public');

        // Return the image URL in the JSON response
        return response()->json(['location' => Storage::url($path)]);
    }
}

