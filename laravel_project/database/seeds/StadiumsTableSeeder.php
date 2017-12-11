<?php

use Illuminate\Database\Seeder;

class StadiumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('stadiums')->truncate();

        DB::table('stadiums')->insert([
            ['name' => 'Luzhniki Stadium'],
            ['name' => 'Saint Petersburg Stadium'],
            ['name' => 'Fisht Stadium'],
            ['name' => 'Ekaterinburg Arena'],
            ['name' => 'Kazan Arena'],
            ['name' => 'Nizhny Novgorod Stadium'],
        ]);
    }
}
