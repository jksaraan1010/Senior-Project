<?php

use App\Question;
use Illuminate\Database\Seeder;

class QuestionSeed extends Seeder
{
    public function run()
    {
        DB::table((new Question)->getTable())->truncate();

        Question::insert([
            [
                'id'             => 1,
                'topic_id'       => 1,
                'question_text'  => 'abcdadminjdkvjdjvkjdadmin',
                'created_at'     =>'2018-10-20 11:00:00',
                'updated_at'     =>'2018-10-20 11:00:00',
                'deleted_at'     =>'2018-10-20 11:00:00',
               
            ],
            [
                'id'             => 2,
                'topic_id'       => 1,
                'question_text'  => 'abcdadminjdkvjdjvkjdadmin',
                'created_at'     =>'2018-10-20 11:00:00',
                'updated_at'     =>'2018-10-20 11:00:00',
                'deleted_at'     =>'2018-10-20 11:00:00',
               
            ],
        ]);
    }
}
