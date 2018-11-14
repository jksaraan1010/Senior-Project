<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);
        $this->call(TopicsSeeder::class);
        $this->call(QuestionsSeeder::class);
        $this->call(QuestionsOptionSeeder::class);
        $this->call(ModuleSeeder::class);



        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Model::reguard();
    }
}
