<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use App\Mail\MailAdminGuide;

class MailAdminGuideController extends Controller
{
    
    public function index(){
        return view('MailAdminGuide');
       }
       
       //this send function is where the validation of email adress happens, and email
       //is a required field

        public function send(Request $request)
        {
            $data  = $this->validate($request, [
                'email' => 'required'
            ]);

        //below is code for entering to: what email and send: the content in MailAdminGuide
         
        Mail::to($request->input('email'))->send(new MailAdminGuide());
         
        //below is verification that email has been sent out
         
        return redirect()->back()->with('success', 'Email sent successfully. Check your email.');
        }
}
