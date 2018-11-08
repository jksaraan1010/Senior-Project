<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Input;

class MailController extends Controller
{
   public function index(){
    return view('Mail');
   }
   
    public function send(Request $request)
    {
        $this->validate($request, [
            'email' => 'required'
        ]);
        $storedNotes = DB::select('SELECT name FROM notes');
     Mail::to($request->input('email'))->send(new SendMail());
     return redirect()->back()->with('success', 'Email sent successfully. Check your email.');
    }
}
