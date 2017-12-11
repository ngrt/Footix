<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('team/teams_index', compact('teams'));
    }

    public function show($id)
    {
        $team = Team::findOrFail($id);
        $players = Player::whereIn("team_id", $team)->get();
        return view('team/teams_show', compact('team', 'players'));
    }
}
