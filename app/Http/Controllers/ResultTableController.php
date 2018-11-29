<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Test;
class ResultTableController extends Controller
{
    public function SurveyResultTable()
    {
        $id = Auth::id();

        $tableForScores = Test::select('result')->where('user_id', auth()->id())
        ->get();

        $tableDate = DB::select('SELECT (DATE_FORMAT(created_at,"%m-%d-%Y")) as dateTaken FROM `test_answers`WHERE question_id in (1,2,3,4) AND user_id= '.$id.'  GROUP BY (created_at) ORDER BY (created_at) ');
       //tableSection12 is query for self care section
        $tableSection12 = DB::select('SELECT SUM(correct) as result, test_id as attempt FROM `test_answers` WHERE question_id in (1,2,3,4) AND user_id= '.$id.' GROUP BY ( test_id)  ');
       //tableSection13 is query for health awareness section
        $tableSection13 = DB::select('SELECT SUM(correct) as result, test_id as attempt FROM `test_answers` WHERE question_id in (5,6,7,8) AND user_id= '.$id.' GROUP BY ( test_id)  ');
       //tableSection14 is query for communications section
        $tableSection14 = DB::select('SELECT  SUM(correct) as result, test_id as attempt FROM `test_answers`WHERE question_id in (9,10,11,12) AND user_id= '.$id.' GROUP BY ( test_id)  ');

       
        return \View::make('ResultTable')->with('tableSection12', $tableSection12)->with('tableSection13', $tableSection13)->with('tableSection14', $tableSection14)->with('tableDate', $tableDate)->with('tableForScores', $tableForScores);
    
    }
    }