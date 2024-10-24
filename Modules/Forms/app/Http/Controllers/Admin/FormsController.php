<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\FormField;

class FormsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $forms = Form::paginate(10);
        return view('admin.forms.index', compact('forms'));
    }

    public function create()
    {
        return view('admin.forms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'nullable',
            'slug' => 'required|unique:forms',
            'notification_email' => 'nullable|email',
            'max_submissions' => 'nullable|integer',
            // Add other validations as needed
        ]);

        $form = Form::create($request->all());

        return redirect()->route('admin.forms.edit', $form->id)->withSuccess('Form created successfully.');
    }

    public function edit(Form $form)
    {
        return view('admin.forms.edit', compact('form'));
    }

    public function update(Request $request, Form $form)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'slug' => 'required|unique:forms,slug,' . $form->id,
            'notification_email' => 'nullable|email',
            'max_submissions' => 'nullable|integer',
            // Add other validations as needed
        ]);

        $form->update($request->all());

        return redirect()->back()->withSuccess('Form updated successfully.');
    }

    public function destroy(Form $form)
    {
        $form->delete();
        return redirect()->back()->withSuccess('Form deleted successfully.');
    }

    // Implement other methods (storeField, updateField, etc.) similarly
}
