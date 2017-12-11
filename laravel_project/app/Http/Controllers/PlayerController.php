<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;


class PlayerController extends Controller
{
 	public function  index()
 	{
 		$players = Player::all();
        return view('player/player_index', compact('players'));
 	}  

 	
 	public function  show($id)
 	{
 		$player = Player::find($id);
        return view('player/player_show', compact('player'));
 	}  

}
