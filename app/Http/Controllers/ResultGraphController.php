<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\DB;

class ResultGraphController extends Controller
{
    public function SurveyResultGraph(){
        $graphSection1 = DB::select('SELECT COUNT(id) as result FROM `test_answers`WHERE question_id in (1,2,3,4) AND correct = 1 GROUP BY DATE(created_at) ORDER BY DATE(created_at) ');
        $graphSection2 = DB::select('SELECT COUNT(id) as result FROM `test_answers`WHERE question_id in (5,6,7,8) AND correct = 1 GROUP BY DATE(created_at) ORDER BY DATE(created_at) ');
        $graphSection3 = DB::select('SELECT COUNT(id) as result FROM `test_answers`WHERE question_id in (9,10,11,12) AND correct = 1 GROUP BY DATE(created_at) ORDER BY DATE(created_at) ');
        $graphDate = DB::select('SELECT DATE(created_at) as dateTaken FROM `test_answers`WHERE question_id in (1,2,3,4) AND correct = 1 GROUP BY DATE(created_at) ORDER BY DATE(created_at)');
        $graphJsonSection1 = json_encode($graphSection1);
//       dd($graphJsonSection1);
        $graphJsonSection2 = json_encode($graphSection2);
        $graphJsonSection3 = json_encode($graphSection3);
        //dd($graphJsonSection1);
        $graphDateJson = json_encode($graphDate);
        return \View::make('ResultGraph')->with('graphJsonSection1', $graphJsonSection1)->with('graphDateJson', $graphDateJson)->with('graphJsonSection2', $graphJsonSection2)->with('graphJsonSection3', $graphJsonSection3);

    }
}
