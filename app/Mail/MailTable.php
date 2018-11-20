<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Test;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class MailTable extends Mailable
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
        $tableForScores = Test::select('result')->where('user_id', auth()->id())->get();
        $tableDate = DB::select('SELECT (DATE_FORMAT(created_at,"%m-%d-%Y")) as dateTaken FROM `test_answers`WHERE created_at between created_at and created_at + 0.05 and question_id in (1,2,3,4) AND correct = 1  AND user_id= '.$id.'  GROUP BY (created_at) ORDER BY (created_at)');
        $tableSection12 = DB::select('SELECT COUNT(id) as result, test_id as attempt FROM `test_answers`WHERE question_id in (1,2,3,4) AND correct = 1  AND user_id= '.$id.' GROUP BY ( test_id) ORDER BY ( test_id) ');
        $tableSection13 = DB::select('SELECT COUNT(id) as result, test_id as attempt FROM `test_answers`WHERE question_id in (5,6,7,8) AND correct = 1  AND user_id= '.$id.' GROUP BY ( test_id) ORDER BY ( test_id) ');
        $tableSection14 = DB::select('SELECT COUNT(id) as result, test_id as attempt FROM `test_answers`WHERE question_id in (9,10,11,12) AND correct = 1  AND user_id= '.$id.' GROUP BY ( test_id) ORDER BY ( test_id) ');
        return $this->view('EmailTable')->with('tableSection12', $tableSection12)->with('tableSection13', $tableSection13)->with('tableSection14', $tableSection14)->with('tableDate', $tableDate)->with('tableForScores', $tableForScores)->subject('Your Table Of Scores');
   
    }
}