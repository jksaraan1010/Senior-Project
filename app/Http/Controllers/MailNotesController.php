<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotes;
use Illuminate\Support\Facades\Input;

class MailNotesController extends Controller
{
   public function index(){
    return view('MailNotes');
   }
   
    //this send function is where the validation of email adress happens, and email
    //is a required field

    public function send(Request $request)
    {
        $this->validate($request, [
            'email' => 'required'
        ]);

    //below is code for entering to: what email and send: the content in MailNotes

     Mail::to($request->input('email'))->send(new MailNotes());
    
     //below is verification that email has been sent out

     return redirect()->back()->with('success', 'Email sent successfully. 
     Check your email.');
    }
}
