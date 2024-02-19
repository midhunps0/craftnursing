<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Events\ContactFormSubmission;
use App\Mail\ContactMail;



class ContactController extends Controller
{
public function submit(Request $request)
{
    $request->validate([
        'name'=>'required|string',
        'email'=>'required|email',
        'message'=>'required|string',
    ]);
    $formData = $request->all();
    
    
    event(new ContactFormSubmission($formData));
    
    return redirect()->back()->with('success','Thank you your message has been sent!');
}

}
