<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\MailResults;
use Illuminate\Support\Facades\Input;

class MailResultsController extends Controller
{
    
    public function index(){
        return view('MailResults');
       }
       
        public function send(Request $request)
        {
            $data  = $this->validate($request, [
                'email' => 'required'
            ]);
         Mail::to($request->input('email'))->send(new MailResults());
         return redirect()->back()->with('success', 'Email sent successfully.
          Check your email.');
        }
}
