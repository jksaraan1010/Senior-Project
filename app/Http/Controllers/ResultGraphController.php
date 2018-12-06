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
        //graphTotal is query for all total scores of assessments taken by user
        $graphTotal = Test::select('result')->where('user_id', auth()->id())->get();   
        //graphSection1 is query for self care section
        $graphSection1 = DB::select('SELECT SUM(correct) as result FROM `test_answers` WHERE question_id in (1,2,3,4) AND user_id= '.$id.' GROUP BY ( test_id) ');
        //graphSection2 is query for health awareness section
        $graphSection2 =DB::select('SELECT SUM(correct) as result FROM `test_answers` WHERE question_id in (5,6,7,8) AND user_id= '.$id.' GROUP BY ( test_id)  ');
        //graphSection3 is query for communication section
        $graphSection3 = DB::select('SELECT SUM(correct) as result FROM `test_answers` WHERE question_id in (9,10,11,12) AND user_id= '.$id.' GROUP BY ( test_id)  ');
        //graphDate is query to retrieve date of when user took assessment
        $graphDate = DB::select('SELECT (DATE_FORMAT(created_at,"%m-%d-%Y")) as dateTaken FROM `test_answers`WHERE question_id in (1,2,3,4) AND user_id= '.$id.' GROUP BY (created_at) ORDER BY (created_at)');
        //convert all to json because its array, seperated by comma's and format that chartjs needs data in
        $graphJsonTotal = json_encode($graphTotal);
       
        $graphJsonSection1 = json_encode($graphSection1);
       
        $graphJsonSection2 = json_encode($graphSection2);

        $graphJsonSection3 = json_encode($graphSection3);

        $graphDateJson = json_encode($graphDate);
       
        return \View::make('ResultGraph')->with('graphJsonTotal', $graphJsonTotal)->with('graphJsonSection1', $graphJsonSection1)->with('graphDateJson', $graphDateJson)->with('graphJsonSection2', $graphJsonSection2)->with('graphJsonSection3', $graphJsonSection3);
    }
}