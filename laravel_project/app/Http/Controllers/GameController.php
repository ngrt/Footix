<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Team;
use App\Stadium;
use App\Player;



class GameController extends Controller
{
    public function index()
    {
    	$games = Game::orderBy('mdate', 'asc')->get()->groupBy('mdate');
        $teams = Team::all();
        return view('game/game_index', compact('games', 'teams'));
    }

    public function  show($id)
 	{
 		$game = Game::find($id);
 		$stadiums = Stadium::all();
 		$team = Team::all();
 		$team1 = Team::find($game->team1_id);
 		$team2 = Team::find($game->team2_id);
        $players1 = Player::whereIn("team_id", $team1)->get();
        $players2 = Player::whereIn("team_id", $team2)->get();

        return view('game/game_show', compact('game', 'stadiums', 'team', 'players1', 'players2' ));
 	}  
}
