<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Test;
use App\TestAnswer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class MailResults extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        $id = Auth::id();
          
        $results = Test::all()->load('user');
       
        if (!Auth::user()->isAdmin()) {
            $results = $results->where('user_id', '=', Auth::id());
        }
        $topics_results = [];
        $topics = $results->pluck('question.topic'); // get all topic in the quiz questions

        $topics = $topics->pluck('title', 'id'); // get topics title and id
        
         
        foreach($topics as $topic_id => $title){ //loop through each topics
           
            //get topic testanswers using topic id
            $topic_results = TestAnswer::where('test_id', $id)->whereHas('question.topic', function ($q) use ($topic_id) {
                $q->where('id', $topic_id);
            })->get();
        }
            $topics_results[$title] = $topic_results;
            $total_questions =  TestAnswer::where('user_id','=', Auth::id())->where('test_id','=',$id)->count();

        return $this->view('EmailResults')->with('results', $results)->with('results',$results)->with('topics_results',$topics_results)->with('total_questions', $total_questions)->subject('Your Survey Results');
   
    }
}