<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Submission;

class FormsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view(Form $form)
    {
        if (!$form->active) {
            return redirect()->route('dashboard')->withError('This form is not active.');
        }

        return view('client.forms.view-form', compact('form'));
    }

    public function submit(Request $request, Form $form)
    {
        $request->validate($form->fieldRules());

        $data = $request->only($form->fieldNames());

        $submission = $form->submissions()->create([
            'user_id' => auth()->id(),
            'data' => $data,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        $submission->notifyNewSubmission();

        return redirect()->back()->withSuccess('Form submitted successfully.');
    }

    public function viewSubmission(Submission $submission)
    {
        if ($submission->user_id !== auth()->id()) {
            return redirect()->route('login')->withError('Please login to view this page.');
        }

        return view('client.forms.view-submission', compact('submission'));
    }

    // Implement other methods (paySubmission, updateSubmission, etc.) similarly
}
