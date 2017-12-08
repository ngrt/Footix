<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->delete();

        DB::table('players')->insert([
            [
                'team_id' => 9,
                'name' => 'Pedro Gallese',
                'role' => 'Goalkeeper',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 9,
                'name' => 'Christian Ramos',
                'role' => 'Defender',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 9,
                'name' => 'Edison Flores',
                'role' => 'Striker',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 7,
                'name' => 'Karim Benzema',
                'role' => 'Striker',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 7,
                'name' => 'Kylian MBappe',
                'role' => 'Striker',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 7,
                'name' => 'Samuel Umtiti',
                'role' => 'Defender',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 8,
                'name' => 'Simon Kjaer',
                'role' => 'Defender',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 8,
                'name' => 'Nicklas Bendtner',
                'role' => 'Striker',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 8,
                'name' => 'Christian Eriksen',
                'role' => 'Midfielder',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 6,
                'name' => 'Tim Cahill',
                'role' => 'Midfielder',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 6,
                'name' => 'Tomi Jurik',
                'role' => 'Striker',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 6,
                'name' => 'Mile Jedinak',
                'role' => 'Midfielder',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],

        ]);
    }
}
