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
                'role_id' => 0,
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
                'url_photo' => '/images/players/photo_player.jpg',
            ],
            [
                'team_id' => 4,
                'name' => 'Christian Ramos',
                'role_id' => 1,
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
                'url_photo' => 'public/images/players/photo_player.jpg',
            ],
            [
                'team_id' => 4,
                'name' => 'Edison Flores',
                'role_id' => 3,
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
                'url_photo' => 'public/images/players/photo_player.jpg',
            ],
            [
                'team_id' => 2,
                'name' => 'Karim Benzema',
                'role_id' => 3,
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
                'url_photo' => 'benzema.jpg',
            ],
            [
                'team_id' => 2,
                'name' => 'Kylian MBappe',
                'role_id' => 3,
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
                'url_photo' => 'public/images/players/photo_player.jpg',
            ],
            [
                'team_id' => 2,
                'name' => 'Samuel Umtiti',
                'role_id' => 2,
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
                'url_photo' => 'public/images/players/photo_player.jpg',
            ],
            [
                'team_id' => 3,
                'name' => 'Simon Kjaer',
                'role_id' => 2,
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
                'url_photo' => 'public/images/players/photo_player.jpg',
            ],
            [
                'team_id' => 3,
                'name' => 'Nicklas Bendtner',
                'role_id' => 3,
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
                'url_photo' => 'public/images/players/photo_player.jpg',
            ],
            [
                'team_id' => 3,
                'name' => 'Christian Eriksen',
                'role_id' => 2,
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
                'url_photo' => 'public/images/players/photo_player.jpg',
            ],
            [
                'team_id' => 1,
                'name' => 'Tim Cahill',
                'role_id' => 2,
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
                'url_photo' => 'public/images/players/photo_player.jpg',
            ],
            [
                'team_id' => 1,
                'name' => 'Tomi Jurik',
                'role_id' => 3,
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
                'url_photo' => 'public/images/players/photo_player.jpg',
            ],
            [
                'team_id' => 1,
                'name' => 'Mile Jedinak',
                'role_id' => 2,
                'goals' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'games' => 0,
                'url_photo' => 'public/images/players/photo_player.jpg',
            ],

        ]);
    }
}
