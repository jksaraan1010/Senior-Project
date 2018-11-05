<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Terms;

class FrontController extends Controller
{
    

    public function Terms_show()
    {
    
        $terms = Terms::All();
        
        return view('terms.show',compact('terms'));
    }
}
