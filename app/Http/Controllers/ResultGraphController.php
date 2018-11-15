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
        
        // here also there must be user id condition in where clause
        $graphSection1 = DB::select('SELECT COUNT(id) as result FROM `test_answers`WHERE question_id in (1,2,3,4) AND correct = 1 AND user_id= '.$id.' GROUP BY  (test_id) ORDER BY  (test_id) ');
        $graphSection2 = DB::select('SELECT COUNT(id) as result FROM `test_answers`WHERE question_id in (5,6,7,8) AND correct = 1 AND user_id= '.$id.' AND user_id= '.$id.' GROUP BY  (test_id) ORDER BY  (test_id) ');
        $graphSection3 = DB::select('SELECT COUNT(id) as result FROM `test_answers`WHERE question_id in (9,10,11,12) AND correct = 1 AND user_id= '.$id.' GROUP BY  (test_id) ORDER BY  (test_id) ');
        
        $graphDate = DB::select('SELECT (DATE_FORMAT(created_at,"%m-%d-%Y")) as dateTaken FROM `test_answers`WHERE question_id in (1,2,3,4) AND user_id= '.$id.' GROUP BY (created_at) ORDER BY (created_at)');
        
        $total = count($graphDate);
        
        $tempArray = ["result"=>0];
        // dd($total);
        $total_graphSection1 = count($graphSection1); 
        // dd($graphSection1);
        if($total_graphSection1 < $total) {
            for($i=$total_graphSection1;$i<=($total);$i++) {
                $graphSection1 = array_merge($graphSection1,[$tempArray]);
            }
        } else {
            $graphSection1 = $graphSection1; 
        }
        $total_graphSection2 = count($graphSection2); 
        // dd($graphSection1);
        if($total_graphSection2 < $total) {
            for($i=$total_graphSection2;$i<=($total);$i++) {
                $graphSection2 = array_merge($graphSection2,[$tempArray]);
            }
        } else {
            $graphSection2 = $graphSection2; 
        }
        $total_graphSection3 = count($graphSection3); 
        // dd($graphSection1);
        if($total_graphSection3 < $total) {
            for($i=$total_graphSection3;$i<=($total);$i++) {
                $graphSection3 = array_merge($graphSection3,[$tempArray]);
            }
        } else {
            $graphSection3 = $graphSection3; 
        }

        // $graphSection1 = array_merge($graphSection1,[$tempArray]);
        // dd($graphSection1);
        $graphJsonTotal = json_encode($graphTotal);
        // dd($graphJsonTotal);
        $graphJsonSection1 = json_encode($graphSection1);
        // dd($graphJsonSection1);
        $graphJsonSection2 = json_encode($graphSection2);
        $graphJsonSection3 = json_encode($graphSection3);
        // dd($graphJsonSection2);
        $graphDateJson = json_encode($graphDate);
        // dd($graphDateJson);
        return \View::make('ResultGraph')->with('graphJsonTotal', $graphJsonTotal)->with('graphJsonSection1', $graphJsonSection1)->with('graphDateJson', $graphDateJson)->with('graphJsonSection2', $graphJsonSection2)->with('graphJsonSection3', $graphJsonSection3);
    }
}