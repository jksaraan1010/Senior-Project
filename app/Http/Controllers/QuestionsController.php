<?php

namespace App\Http\Controllers;

use App\Question;
use App\QuestionsOption;
use App\Topic;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuestionsRequest;
use App\Http\Requests\UpdateQuestionsRequest;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of Question.
     *
     * @return \Illuminate\Http\Response
     */
    //this function is dispay all question
    public function index()
    {
        $questions = Question::all(); //get all question from database

        return view('questions.index', compact('questions'));
    }

    /**
     * Show the form for creating new Question.
     *
     * @return \Illuminate\Http\Response
     */
    //this function is dispay question form
    public function create()
    {
        $relations = [
             'topics' => \App\Topic::get()->pluck('title', 'id'), //get topic from table

        ];

        $correct_options = [
            'option1' => 'Option #1',
            'option2' => 'Option #2',
            'option3' => 'Option #3',
            'option4' => 'Option #4',
            'option5' => 'Option #5'
        ];

        return view('questions.create', compact('correct_options') + $relations);
    }

    /**
     * Store a newly created Question in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionsRequest  $request
     * @return \Illuminate\Http\Response
     */
     //this function is insert question in table
    public function store(StoreQuestionsRequest $request)
    {
          if($request->title != ''){
            $topic = new Topic();
            $topic->title = $request->title;
            $topic->save();
            $topic_id = $topic->id;
        }else{
            $topic_id = $request->topic_id;
        }
        //insert Question
       $question = new Question();
        $question->topic_id = $topic_id;
        $question->question_text = $request->question_text;
        $question->save();


        //insert QuestionsOption
        foreach ($request->input() as $key => $value) {
            if(strpos($key, 'option') !== false && $value != '') {
                $status = $request->input('correct') == $key ? 1 : 0;
                QuestionsOption::create([
                    'question_id' => $question->id,
                    'option'      => $value,
                    'correct'     => $status
                ]);
            }
        }

        return redirect()->route('questions.index');
    }


    /**
     * Show the form for editing Question.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    //this function is open edit quation form
    public function edit($id)
    {
        $relations = [
            'topics' => \App\Topic::get()->pluck('title', 'id'), //get record from topic table
        ];

        $question = Question::findOrFail($id); //get edited record from Question table

        return view('questions.edit', compact('question') + $relations);
    }

    /**
     * Update Question in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //this function is update quation
    public function update(UpdateQuestionsRequest $request, $id)
    {
        //existed topic or new topic 
        if($request->title != ''){
            $topic = new Topic();
            $topic->title = $request->title;
            $topic->save();
            $topic_id = $topic->id;
        }else{
            $topic_id = $request->topic_id;
        }

        
        //update quation
        $question = Question::findOrFail($id); 
        $question->topic_id = $topic_id;
        $question->question_text = $request->question_text;
        $question->save();


        QuestionsOption::where('question_id','=',$id)->forceDelete(); // //delete old QuestionsOption

       
        //update QuestionsOption
        foreach ($request->input() as $key => $value) {
            if(strpos($key, 'option') !== false && $value != '') {
                $status = $request->input('correct') == $key ? 1 : 0;
                QuestionsOption::create([
                    'question_id' => $id,
                    'option'      => $value,
                    'correct'     => $status
                ]);
            }
        }


        return redirect()->route('questions.index');
    }


    /**
     * Display Question.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'topics' => \App\Topic::get()->pluck('title', 'id')
            ->prepend('Please select', ''),
        ];

        $question = Question::findOrFail($id); //get Question from Question table

        return view('questions.show', compact('question') + $relations);
    }


    /**
     * Remove Question from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('questions.index');
    }

    /**
     * Delete all selected Question at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Question::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }

              
    }


}
