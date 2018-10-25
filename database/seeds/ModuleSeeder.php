<?php

use Illuminate\Database\Seeder;

use App\Module;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table((new Module)->getTable())->truncate();

        Module::insert([
            [
                'id'    => 1,
                'name' => 'Self-Care',
            ],
            [
                'id'    => 2,
                'name' => 'Communication',
            ],
            [
                'id'    => 3,
                'name' => 'Health Awareness',
            ],
        
        ]);
    }
}
