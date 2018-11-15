<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Question;
use App\Result;
use App\Test;
use App\User;
use App\TestAnswer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = TestAnswer::where('user_id', auth()->id())->orderBy('id', 'desc')->take(12)->get();

        $questions = Question::count();
        $users = User::where('role_id',2)->count();
        $quizzes = Test::count();
        $id = Auth::id();
        //dd($id);
        //$userId
        // $graphTotal = DB::select('SELECT result FROM `tests`');
        //$graphJsonTotal= json_encode($graphTotal);
        //dd($graphJsonTotal);
        //$graphSection1 = DB::select('SELECT COUNT(id) as result FROM `test_answers`WHERE question_id in (1,2,3,4) AND correct = 1 AND user_id= '.$id.' GROUP BY  (created_at) ORDER BY  (created_at) ');

        //dd($graphJsonSection1);
       
        $id = Auth::id();
        $tableForScores = Test::select('result')->where('user_id', auth()->id())->get();
        $tableDate = DB::select('SELECT (DATE_FORMAT(created_at,"%m-%d-%Y")) as dateTaken FROM `test_answers`WHERE question_id in (1,2,3,4) AND user_id= '.$id.'  GROUP BY (created_at) ORDER BY (created_at)');
        $tableSection12 = DB::select('SELECT COUNT(id) as result, test_id as attempt FROM `test_answers`WHERE question_id in (1,2,3,4) AND correct = 1  AND user_id= '.$id.' GROUP BY ( test_id) ORDER BY ( test_id) ');
        // dd($tableSection12);
        $tableSection13 = DB::select('SELECT COUNT(id) as result, test_id as attempt FROM `test_answers`WHERE question_id in (5,6,7,8) AND correct = 1  AND user_id= '.$id.' GROUP BY ( test_id) ORDER BY ( test_id) ');
        $tableSection14 = DB::select('SELECT COUNT(id) as result, test_id as attempt FROM `test_answers`WHERE question_id in (9,10,11,12) AND correct = 1  AND user_id= '.$id.' GROUP BY ( test_id) ORDER BY ( test_id) ');
        
        $graphTotal = Test::select('result')->where('user_id', auth()->id())->orderBy('id', 'desc')->take(5)->get();
        $graphSection1 = DB::select('SELECT COUNT(id) as result FROM `test_answers`WHERE question_id in (1,2,3,4) AND correct = 1 AND user_id= '.$id.' GROUP BY  (test_id) ORDER BY  (test_id) ');
        $graphSection2 = DB::select('SELECT COUNT(id) as result FROM `test_answers`WHERE question_id in (5,6,7,8) AND correct = 1 AND user_id= '.$id.' AND user_id= '.$id.' GROUP BY  (test_id) ORDER BY  (test_id) ');
        $graphSection3 = DB::select('SELECT COUNT(id) as result FROM `test_answers`WHERE question_id in (9,10,11,12) AND correct = 1 AND user_id= '.$id.' GROUP BY  (test_id) ORDER BY  (test_id) ');
        
        $graphDate = DB::select('SELECT (DATE_FORMAT(created_at,"%m-%d-%Y")) as dateTaken FROM `test_answers`WHERE  created_at between created_at and created_at + 0.05 and question_id in (1,2,3,4) AND user_id= '.$id.' GROUP BY (created_at) ORDER BY (created_at)');
        
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
        return \View::make('home')->with('results', $results)->with('tableSection12', $tableSection12)->with('tableSection13', $tableSection13)->with('tableSection14', $tableSection14)->with('tableForScores', $tableForScores)->with('tableDate', $tableDate)->with('graphJsonSection1', $graphJsonSection1)->with('graphDateJson', $graphDateJson)->with('graphJsonSection2', $graphJsonSection2)->with('graphJsonSection3', $graphJsonSection3)->with('graphJsonTotal', $graphJsonTotal);
        //return view('home');
    }
}