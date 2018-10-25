<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TestAnswer;

class TimelineController extends Controller
{
    public function index()
    {
        $results = TestAnswer::where('user_id', auth()->id())->orderBy('id', 'desc')->take(12)->get();
        return view('Timeline')->with('results', $results);
    }
}
