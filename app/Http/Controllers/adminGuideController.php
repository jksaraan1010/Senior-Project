<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminGuideController extends Controller
{
    public function index()
    {
        return view('adminGuide');
    }
}
