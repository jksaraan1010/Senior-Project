<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userGuideController extends Controller
{
    public function index()
    {
        return view('userGuide');
    }
}
