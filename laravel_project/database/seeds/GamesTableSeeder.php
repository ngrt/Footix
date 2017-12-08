<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('games')->delete();
        DB::table('games')->insert([

            ['team1_id' => 7,

            'team2_id' => 6,

            'score1' => '0',

            'score2' => '0',

            'odd1' => '1.20',

            'odd2' => '13',

            'odd_draw' => '5.50',

            'mdate' => Carbon::createFromFormat('Y-m-d', '2018-06-16')->toDateTimeString(),

            'stadium' => 'Kazan Arena'],

            

            ['team1_id' => 9,

            'team2_id' => 8,

            'score1' => '0',

            'score2' => '0',

            'odd1' => '3.40',

            'odd2' => '2.05',

            'odd_draw' => '3.10',


            'mdate' => Carbon::createFromFormat('Y-m-d', '2018-06-16')->toDateTimeString(),

            'stadium' => 'Mordovia Arena'],


            ['team1_id' => 8,

            'team2_id' => 6,

            'score1' => '0',

            'score2' => '0',

            'odd1' => '1.68',

            'odd2' => '4.60',

            'odd_draw' => '3.50',


            'mdate' => Carbon::createFromFormat('Y-m-d', '2018-06-21')->toDateTimeString(),

            'stadium' => 'Cosmos Arena'],



            ['team1_id' => 7,

            'team2_id' => 9,

            'score1' => '0',

            'score2' => '0',

            'odd1' => '1.78',

            'odd2' => '4.40',

            'odd_draw' => '3.25',


            'mdate' => Carbon::createFromFormat('Y-m-d', '2018-06-21')->toDateTimeString(),

            'stadium' => 'Stade Central'],


            ['team1_id' => 8,

            'team2_id' => 7,

            'score1' => '0',

            'score2' => '0',

            'odd1' => '3.60',

            'odd2' => '2.00',

            'odd_draw' => '3.05',


            'mdate' => Carbon::createFromFormat('Y-m-d', '2018-06-26')->toDateTimeString(),

            'stadium' => 'Stade Loujniki'],


            ['team1_id' => 6,

            'team2_id' => 9,

            'score1' => '0',

            'score2' => '0',

            'odd1' => '3.60',

            'odd2' => '2.00',

            'odd_draw' => '3.05',


            'mdate' => Carbon::createFromFormat('Y-m-d', '2018-06-26')->toDateTimeString(),

            'stadium' => 'Stade Olympique Ficht'],



        ]);
    }
}
