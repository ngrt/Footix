<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bet;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Game;
use App\Team;

class BetController extends Controller
{

    public function index()
    {
        $games = Game::all();
        $teams = Team::all();

        $final = [];

        foreach ($games as $game)
        {
            $final[$game->id] = $teams->find($game->team1_id)->name . " vs " . $teams->find($game->team2_id)->name;
        }

        return view('bet/index', compact('final', 'games'));
    }


    public function add()
    {
        return view('bet/add');
    }

    public function create(Request $request)
    {
        $id = Auth::user()->id;
        $game = Game::findOrFail($request->input()['select-game']);
        $teams = Team::all();
        $user = User::find($id);

        return view("bet/create", compact('game', "teams", "user"));
    }

    public function store(Request $request)
    {
        Bet::create($request->all());

        $id = Auth::user()->id;
        $user = User::find($id);

        $user->increment('balance', -$request->input("amount"));

        $user->save();

        $request->session()->flash('alert-success', 'Bet was successfully added. You have to wait for after the game is done.');
        return redirect(route('bets.index'));
    }

    public function store_add(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        $user->increment('balance', $request->input("amount"));

        $user->save();
        return redirect(route('bets.index'));

    }
}
