<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Team;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/admin');
    }

    public function players_index()
    {
        $players = Player::all();
        return view('admin/players_index', compact('players'));
    }

    public function create()
    {
        return view('admin/players_create');
    }

    public function players_edit($id)
    {
        $player = Player::find($id);
        $teams = Team::pluck('name', 'id');
        return view('admin/players_edit', compact('player','teams'));
    }

    public function players_update($id, Request $request)
    {
        $player = Player::findOrFail($id);
        $player->update($request->all());
        return redirect(route("admin.players_index"));
    }

    public function teams_index()
    {
        $teams = Team::all()->orderBy("group");
        return view('admin/teams_index', compact('teams'));
    }


    public function teams_edit($id)
    {
        $team = Team::find($id);
        //dd($player);
        return view('admin/teams_edit', compact('team'));
    }
}