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
        $questions1 = DB::select('select Question  from `questions` WHERE `SectionId`=?', [$sectionId]);
        //$questionsjson = json_encode($questions1);
        //return view('survey', [$questions1]);
        return view('Survey',['questions'=>$questions1]);
        //$questionId = DB::select('select questionId from `answers` WHERE `id`=?', [$questionsAnswer]);
        //return view('Survey',['questionId'=>$questionId]);

        //return response()->json(array('answersQuery'=> $answerQuery), 200);
    }

       public function saveAnswers($questionsId, $questionsAnswer)
    {
        $answerQuery = DB::insert('insert into `answers` (user_answers) where id = questionId values(?)',[$answer]);

        //$answersjson= json_encode($answerQuery);
        //return view('survey', $answersjson);
        return view('Survey',['answers'=>$answerQuery]);

       // return response()->json(array('answersQuery'=> $answerQuery), 200);

    }
    

    
    }
    
    



    
    
