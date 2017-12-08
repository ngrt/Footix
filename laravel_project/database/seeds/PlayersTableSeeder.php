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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('players')->truncate();

        DB::table('players')->insert([
            [
                'team_id' => 4,
                'name' => 'Pedro Gallese',
                'role' => 'Goalkeeper',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 4,
                'name' => 'Christian Ramos',
                'role' => 'Defender',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 4,
                'name' => 'Edison Flores',
                'role' => 'Striker',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 2,
                'name' => 'Karim Benzema',
                'role' => 'Striker',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 2,
                'name' => 'Kylian MBappe',
                'role' => 'Striker',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 2,
                'name' => 'Samuel Umtiti',
                'role' => 'Defender',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 3,
                'name' => 'Simon Kjaer',
                'role' => 'Defender',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 3,
                'name' => 'Nicklas Bendtner',
                'role' => 'Striker',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 3,
                'name' => 'Christian Eriksen',
                'role' => 'Midfielder',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 1,
                'name' => 'Tim Cahill',
                'role' => 'Midfielder',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 1,
                'name' => 'Tomi Jurik',
                'role' => 'Striker',
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
            ],
            [
                'team_id' => 1,
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
