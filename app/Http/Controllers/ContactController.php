<?php

namespace App\Http\Controllers;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Events\ContactFormSubmission;
use App\Mail\ContactMail;
use Modules\Ynotz\SmartPages\Http\Controllers\SmartController;


class ContactController extends SmartController
{
public function submit(Request $request)
{
    $request->validate([
        'name'=>'required|string',
        'email'=>'required|email',
        'message'=>'required|string',
    ]);
    $formData = $request->all();
    
    
    // event(new ContactFormSubmission($formData));
    Mail::to('reshmakanjoorparambil@gmail.com')->send(new ContactMail($formData));
    
    return response()->json(['success'=>true,'message'=>'Thank you your message has been sent!']);
}
 
}
