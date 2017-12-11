<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('teams')->truncate();

        DB::table('teams')->insert([
            ['name' => 'Australia',
            'coach' => 'Ange Postecoglou',
            'flag' => 'AU.png',
            'group' => 'C'],
            ['name' => 'France',
            'coach' => 'Didier Deschamps',
            'flag' => 'FR.png',
            'group' => 'C'],
            ['name' => 'Danemark',
            'coach' => 'Age Hareide',
            'flag' => 'DK.png',
            'group' => 'C'],
            ['name' => 'Peru',
            'coach' => 'Ricardo Gareca',
            'flag' => 'PE.png',
            'group' => 'C'],
        ]);
    }
}