<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//controller to return the view of the timeline to the user
class TimelineController extends Controller
{
    public function index()
    {
        return view('Timeline');
    }
}
