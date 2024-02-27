<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Events\ApplicationFormSubmission;
use App\Mail\ApplicationMail;
use Illuminate\Http\JsonResponse;


class ApplicationController extends Controller
{
    public function submit(Request $request){
        $request->validate([
            'name'=>'required|string',
            'address'=>'required|string',
            'qualification'=>'required|string',
            'subject'=>'required|string',
            'mark'=>'required|integer',
            'email'=>'required|email',
            'contact'=>'required|numeric|digits:10',
        ]);
        $formData = $request->all();
        // event(new ApplicationFormSubmission($formData));
        Mail::to('reshmakanjoorparambil@gmail.com')->send(new ApplicationMail($formData));
        return response()->json(['success' => true, 'message' => 'Form submitted successfully']);
    }
}
