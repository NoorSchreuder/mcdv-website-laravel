<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',  // Use a standard validation rule like 'numeric'
            'message' => 'required|string',
        ]);
    
        // Check if validation fails
        if ($validator->fails()) {
            return redirect('/contact')->withErrors($validator)->withInput();
        }
    
        // Process the form data (you can send an email or take any other action)
        // For example, sending an email using Laravel's built-in Mail facade
        \Mail::to('ilbanditoarancione@gmail.com')->send(new \App\Mail\ContactFormMail($request->all()));
    
        // Redirect back with a success message
        return redirect('/contact')->with('success', 'Your message has been sent successfully!');
    }
}
