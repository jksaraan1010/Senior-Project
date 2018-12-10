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
        $graphTotal = Test::select('result')->where('user_id', auth()->id())->take(5)->get();
        $graphSection1 = DB::select('SELECT SUM(correct) as result FROM `test_answers` WHERE question_id in (1,2,3,4) AND user_id= '.$id.' GROUP BY ( test_id) ASC LIMIT 5 ');
        $graphSection2 =DB::select('SELECT SUM(correct) as result FROM `test_answers` WHERE question_id in (5,6,7,8) AND user_id= '.$id.' GROUP BY ( test_id) ASC LIMIT 5 ');
        $graphSection3 = DB::select('SELECT SUM(correct) as result FROM `test_answers` WHERE question_id in (9,10,11,12) AND user_id= '.$id.' GROUP BY ( test_id) ASC LIMIT 5');
        
        $graphDate = DB::select('SELECT (DATE_FORMAT(created_at,"%m-%d-%Y")) as dateTaken FROM `test_answers`WHERE question_id in (1,2,3,4) AND user_id= '.$id.' GROUP BY (created_at) ORDER BY (created_at) DESC LIMIT 5');
        
        
        $graphJsonTotal = json_encode($graphTotal);
       
        $graphJsonSection1 = json_encode($graphSection1);
       
        $graphJsonSection2 = json_encode($graphSection2);
        $graphJsonSection3 = json_encode($graphSection3);
        $graphDateJson = json_encode($graphDate);
       
        $tableForScores = Test::select('result')->where('user_id', auth()->id())->take(5)->get();

        $tableDate = DB::select('SELECT (DATE_FORMAT(created_at,"%m-%d-%Y")) as dateTaken FROM `test_answers`WHERE question_id in (1,2,3,4) AND user_id= '.$id.'  GROUP BY (created_at) ORDER BY (created_at) DESC LIMIT 5');
       
        $tableSection12 = DB::select('SELECT SUM(correct) as result, test_id as attempt FROM `test_answers` WHERE question_id in (1,2,3,4) AND user_id= '.$id.' GROUP BY ( test_id) DESC LIMIT 5 ');

        $tableSection13 = DB::select('SELECT  SUM(correct) as result, test_id as attempt FROM `test_answers` WHERE question_id in (5,6,7,8) AND user_id= '.$id.' GROUP BY ( test_id) DESC LIMIT 5  ');

        $tableSection14 = DB::select('SELECT  SUM(correct) as result, test_id as attempt FROM `test_answers`WHERE question_id in (9,10,11,12) AND user_id= '.$id.' GROUP BY ( test_id) DESC LIMIT 5  ');

        return \View::make('home')->with('results', $results)->with('tableSection12', $tableSection12)->with('tableSection13', $tableSection13)->with('tableSection14', $tableSection14)->with('tableForScores', $tableForScores)->with('tableDate', $tableDate)->with('graphJsonSection1', $graphJsonSection1)->with('graphDateJson', $graphDateJson)->with('graphJsonSection2', $graphJsonSection2)->with('graphJsonSection3', $graphJsonSection3)->with('graphJsonTotal', $graphJsonTotal);
    }
}