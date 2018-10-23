<?php

use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert(

            ['question_text'=> 'I know what medications I am taking and why I am taking them',
                'topic_id'=>'1',
            ]);
        DB::table('questions')->insert(

            ['question_text'=> 'I know my complete medical history',
               'topic_id'=>'1',
            ]);
        DB::table('questions')->insert(

            ['question_text'=> 'I know what to do if I feel sick',
                'topic_id'=>'1',
            ]);
        DB::table('questions')->insert(

            ['question_text'=> 'I know what type of insurance I have and how to apply for it',
               'topic_id'=>'1',
            ]);
        DB::table('questions')->insert(

            ['question_text'=> 'I am able to take care of myself',
                'topic_id'=>'2',
            ]);
        DB::table('questions')->insert(

            ['question_text'=> 'I can take my medications by myself without reminders or help',
                'topic_id'=>'2',
            ]);
        DB::table('questions')->insert(

            ['question_text'=> 'I know how to get my medications filled',
                'topic_id'=>'2',
            ]);
        DB::table('questions')->insert(
            [
                'question_text'=> 'I know how to get transportation to my doctors appointments',
                'topic_id'=>'2',
            ]);
        DB::table('questions')->insert(
            [
                'question_text'=> 'I know how to contact the doctors office if i feel ill',
                'topic_id'=>'3',

            ]);
        DB::table('questions')->insert(
            [
                'question_text'=> 'I know how to make appointments with my doctor',
                'topic_id'=>'3',

            ]);
        DB::table('questions')->insert(
            [
                'question_text'=> 'I can speak to doctor by myself without help from family or friends',
                'topic_id'=>'3',

            ]);
        DB::table('questions')->insert(
            [
                'question_text'=> 'I feel comfortable transitioning from my current doctor to an adult doctor',
                'topic_id'=>'3',
            ]);



    }
}
