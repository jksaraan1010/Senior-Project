<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\MailTable;
use Illuminate\Support\Facades\Input;

class MailTableController extends Controller
{
    
    public function index(){
        return view('MailTable');
       }
       
        public function send(Request $request)
        {
            $data  = $this->validate($request, [
                'email' => 'required'
            ]);
         Mail::to($request->input('email'))->send(new MailTable());
         return redirect()->back()->with('success', 'Email sent successfully. 
         Check your email.');
        }
}
