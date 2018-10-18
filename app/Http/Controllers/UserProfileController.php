<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserProfileController extends Controller
{
    Public Function index()
    {
        
        return view('userProfile.UserProfile');
    }
}
