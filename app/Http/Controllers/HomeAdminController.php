<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Question;
use App\Result;
use App\Test;
use App\User;
class HomeAdminController extends Controller
{
    public function index()
    {
        $questions = Question::count();
        $users = User::where('role_id', 2)->count();
        $quizzes = Test::count();
        return view('homeAdmin');
    }

}
