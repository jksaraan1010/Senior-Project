<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use App\Mail\MailUserGuide;

class MailUserGuideController extends Controller
{
    public function index(){
        return view('MailUserGuide');
       }
       
        public function send(Request $request)
        {
            $data  = $this->validate($request, [
                'email' => 'required'
            ]);
         Mail::to($request->input('email'))->send(new MailUserGuide());
         return redirect()->back()->with('success', 'Email sent successfully. Check your email.');
        }
}
