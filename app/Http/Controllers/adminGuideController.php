<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//controller to return the view of the admin guide to the user
class adminGuideController extends Controller
{
    public function index()
    {
        return view('adminGuide');
    }
}
