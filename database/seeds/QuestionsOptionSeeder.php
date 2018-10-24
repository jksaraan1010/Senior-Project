<?php

use Illuminate\Database\Seeder;
use App\QuestionsOption;
class QuestionsOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions_options')->insert(

            ['question_id'=> '1',
                'option'=>'Yes',
                'correct'=>'1',
            ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '1',
                'option'=>'No',
                'correct'=>'0',
            ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '2',
                'option'=>'Yes',
                'correct'=>'1',
            ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '2',
                'option'=>'No',
                'correct'=>'0',
            ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '3',
                'option'=>'Yes',
                'correct'=>'1',
            ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '3',
                'option'=>'No',
                'correct'=>'0',
            ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '4',
                'option'=>'Yes',
                'correct'=>'1',
            ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '4',
                'option'=>'No',
                'correct'=>'0',
            ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '5',
                'option'=>'Yes',
                'correct'=>'1',
            ]);
        DB::table('questions_options')->insert(

        ['question_id'=> '5',
            'option'=>'No',
            'correct'=>'0',
        ]);
        DB::table('questions_options')->insert(

        ['question_id'=> '6',
            'option'=>'Yes',
            'correct'=>'1',
        ]);
        DB::table('questions_options')->insert(

        ['question_id'=> '6',
            'option'=>'No',
            'correct'=>'0',
        ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '7',
                'option'=>'Yes',
                'correct'=>'1',
            ]);
        DB::table('questions_options')->insert(

        ['question_id'=> '7',
            'option'=>'No',
            'correct'=>'0',
        ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '8',
                'option'=>'Yes',
                'correct'=>'1',
            ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '8',
                'option'=>'No',
                'correct'=>'0',
            ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '9',
                'option'=>'Yes',
                'correct'=>'1',
            ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '9',
                'option'=>'No',
                'correct'=>'0',
            ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '10',
                'option'=>'Yes',
                'correct'=>'1',
            ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '10',
                'option'=>'No',
                'correct'=>'0',
            ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '11',
                'option'=>'Yes',
                'correct'=>'1',
            ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '11',
                'option'=>'No',
                'correct'=>'0',
            ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '12',
                'option'=>'Yes',
                'correct'=>'1',
            ]);
        DB::table('questions_options')->insert(

            ['question_id'=> '12',
                'option'=>'No',
                'correct'=>'0',
            ]);

    }
}
