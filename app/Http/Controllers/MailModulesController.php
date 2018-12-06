<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailModules;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Input;
class MailModulesController extends Controller
{
    public function index(){
        return view('MailModules');
       }

        //this send function is where the validation of email adress happens, and email
       //is a required field

        public function send(Request $request)
        {
            $data  = $this->validate($request, [
                'email' => 'required'
            ]);

        //below is code for entering to: what email and send: the content in MailModules

         Mail::to($request->input('email'))->send(new MailModules());
        
         //below is verification that email has been sent out

         return redirect()->back()->with('success', 'Email sent successfully. 
         Check your email.');
        }
}
