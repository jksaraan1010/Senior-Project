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
   
        public function send(Request $request)
        {
            $data  = $this->validate($request, [
                'email' => 'required'
            ]);
         Mail::to($request->input('email'))->send(new MailModules());
         return redirect()->back()->with('success', 'Email sent successfully. 
         Check your email.');
        }
}