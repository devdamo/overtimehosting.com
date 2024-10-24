<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MOTDController extends Controller
{
    /**
     * Show the MOTD editor form.
     */
    public function index()
    {
        return view('motd.index');
    }

    /**
     * Handle the form submission and show preview.
     */
    public function store(Request $request)
    {
        // Start with the main MOTD message
        $motd = $request->input('motd');

        // Append each styled segment
        $segments = $request->input('segments', []);
        foreach ($segments as $segment) {
            $segmentText = $segment['text'];
            $segmentStyle = $segment['color'] ?? '';

            if (isset($segment['bold'])) {
                $segmentStyle .= '§l';
            }
            if (isset($segment['italic'])) {
                $segmentStyle .= '§o';
            }
            if (isset($segment['underline'])) {
                $segmentStyle .= '§n';
            }
            if (isset($segment['strikethrough'])) {
                $segmentStyle .= '§m';
            }

            // Append the styled segment to the MOTD
            $motd .= $segmentStyle . $segmentText;
        }

        // Pass the MOTD to the preview view
        return view('motd.preview', ['motd' => $motd]);
    }
}
