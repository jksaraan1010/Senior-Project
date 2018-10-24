<?php

use Illuminate\Database\Seeder;
use App\Topic;
class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert(

            ['title'=> 'Self-Care',
                ]);
        DB::table('topics')->insert(

            ['title'=> 'Health Awareness',
            ]);
        DB::table('topics')->insert(

            ['title'=> 'Communication',
            ]);
    }
}
