<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthAwarenessController extends Controller
{
    public function index()
    {
        return view('healthAwareness');
    }
}
