<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//controller to return the view of the user guide to the user
class userGuideController extends Controller
{
    public function index()
    {
        return view('userGuide');
    }
}
