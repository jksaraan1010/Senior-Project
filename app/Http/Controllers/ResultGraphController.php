<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Test;

class ResultGraphController extends Controller
{
    public function SurveyResultGraph(){
        $id = Auth::id();
        //dd($id);
        //$userId
        $graphTotal = Test::select('result')->where('user_id', auth()->id())->get();
        // $graphTotal = DB::select('SELECT result FROM `tests`');
        //$graphJsonTotal= json_encode($graphTotal);
        //dd($graphJsonTotal);
        $graphSection1 = DB::select('SELECT COUNT(id) as result FROM `test_answers`WHERE question_id in (1,2,3,4) AND correct = 1 AND user_id= '.$id.' GROUP BY  (created_at) ORDER BY  (created_at) ');

        //dd($graphJsonSection1);
        //$graphSection1 = DB::select('SELECT COUNT(id) as result FROM `test_answers`WHERE question_id in (1,2,3,4) AND correct = 1 GROUP BY  (created_at) ORDER BY  (created_at) ');
        //dd($graphSection1);
        $graphSection2 = DB::select('SELECT COUNT(id) as result FROM `test_answers`WHERE  question_id in (5,6,7,8) AND correct = 1 AND user_id= '.$id.' GROUP BY (created_at) ORDER BY (created_at) ');
        $graphSection3 = DB::select('SELECT COUNT(id) as result FROM `test_answers`WHERE   question_id in (9,10,11,12) AND correct = 1 AND user_id= '.$id.' GROUP BY  (created_at) ORDER BY  (created_at) ');
        $graphDate = DB::select('SELECT (DATE_FORMAT(created_at,"%m-%d-%Y")) as dateTaken FROM `test_answers`WHERE question_id in (1,2,3,4) AND correct = 1 AND user_id= '.$id.' GROUP BY (created_at) ORDER BY (created_at)');
        $graphJsonTotal = json_encode($graphTotal);
        //dd($graphJsonTotal);
        $graphJsonSection1 = json_encode($graphSection1);

        $graphJsonSection2 = json_encode($graphSection2);
        $graphJsonSection3 = json_encode($graphSection3);
        $graphDateJson = json_encode($graphDate);
        return \View::make('ResultGraph')->with('graphJsonTotal', $graphJsonTotal)->with('graphJsonSection1', $graphJsonSection1)->with('graphDateJson', $graphDateJson)->with('graphJsonSection2', $graphJsonSection2)->with('graphJsonSection3', $graphJsonSection3);
    }
}