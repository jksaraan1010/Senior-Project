<?php

namespace App\Http\Controllers;

use Auth;
use App\Test;
use App\Question;
use App\TestAnswer;
use App\Topic;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\StoreResultsRequest;
use App\Http\Requests\UpdateResultsRequest;

class ResultsController extends Controller
{
    public function __construct()
    {
      /*  $this->middleware('admin')->except('index', 'show');*/
    }

    /**
     * Display a listing of Result.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Test::all()->load('user');
       
        if (!Auth::user()->isAdmin()) {
            $results = $results->where('user_id', '=', Auth::id());
        }

        $total_questions =  Question::all()->count();
        return view('results.index', compact('results', 'total_questions'));
    }

    /**
     * Display Result.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
        $Section2 = DB::select('SELECT COUNT(id) as result, test_id as attempt FROM `test_answers`WHERE question_id in (1,2,3,4) AND correct = 1  AND user_id= '.$id.' GROUP BY ( test_id) ORDER BY ( test_id) ');

        
        
        $test = Test::find($id)->load('user');

        if ($test) {
            $results = TestAnswer::where('test_id', $id)
                ->with('question')
                ->with('question.options')
                ->with('question.topic')
                ->get()
            ;
        }

        $topics = $results->pluck('question.topic'); // get all topic in the quiz questions

        $topics = $topics->pluck('title', 'id'); // get topics title and id
        
        $topics_results = []; // to hold topic and it's question collection
        //dd($section_id_json);
        
        foreach($topics as $topic_id => $title){ //loop through each topics
           
            //get topic testanswers using topic id
            $topic_results = TestAnswer::where('test_id', $id)->whereHas('question.topic', function ($q) use ($topic_id) {
                $q->where('id', $topic_id);
            })->get();

            $topics_results[$title] = $topic_results; //save topics asnswers into an array using topic name as index
        }
        $total_questions =  Question::all()->count();
        return view('results.show', compact('section_id_json','section1Score', 'section2Score', 'section3Score','test', 'results', 'topics_results', 'total_questions')); // add topics_results array to view, it holds topic title and it's results
    }
    
}
