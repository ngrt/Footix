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


    public function players_edit($id)
    {
        $player = Player::find($id);
        //dd($player);
        return view('admin/players_edit', compact('player'));
    }
}