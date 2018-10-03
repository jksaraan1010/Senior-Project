<?php

namespace App\Http\Controllers;
use Illuiminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuiminate\Http\HttpGet;


class SurveyController extends Controller
{
    public function index(){
        return view('Survey');
    }
    public static function getQuestions($sectionId)
    {
        $questions1 = DB::select('select Question, id from `questions` WHERE `SectionId`=?', [$sectionId]);
        //$questionsjson = json_encode($questions1);
        //return view('Survey', ["questionsInJson" =>$questionsjson]);
        return view('Survey',['questions'=>$questions1]);
        //return response()->json(array('questionsjson'=> $questionsjson), 200);
    }

       public function saveAnswers( $questionId, $QuestionAnswer)
    {
        //$answerFromUser = $request ->get('answer');
        $answerQuery = DB::insert('insert into `answers` (user_answers) where id = questionId values(?)',[$answer]);
        //$answerFromUser -> $answerQuery;
        //$answersjson= json_encode($answerQuery);
        //return [$answersjson]);
       return view('Survey',['answers'=>$answerFromUser]);

      // return response()->json(array('answersQuery'=> $answerQuery), 200);

    }
    

    
    }
    
    



    
    
