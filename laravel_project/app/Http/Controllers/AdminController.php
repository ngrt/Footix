<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PlayerRequest;
use App\Http\Requests\TeamRequest;
use App\Player;
use App\Team;
use App\Role;
use App\Game;
use App\Stadium;
use App\Goal;
use App\User;
use Illuminate\Support\Facades\Validator;

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

    public function players_create()
    {
        $player = new Player();
        $teams = Team::pluck('name', 'id');
        $roles = Role::pluck('role', 'id');

        foreach ($roles as $key => $role)
        {
            $roles[$key] = ucfirst($role);
        }

        return view('admin/players_create', compact('player', 'teams', 'roles'));
    }

    public function players_store(PlayerRequest $request)
    {

        Player::create($request->all());
        $request->session()->flash('alert-success', 'Player was successfully added');
        return redirect(route("admin.players.index"));

    }

    public function players_edit($id)
    {
        $player = Player::find($id);
        $teams = Team::pluck('name', 'id');
        $roles = Role::pluck('role', 'id');
        foreach ($roles as $key => $role)
        {
            $roles[$key] = ucfirst($role);
        }
        return view('admin/players_edit', compact('player','teams', 'roles'));
    }

    public function players_update($id, PlayerRequest $request)
    {
        $player = Player::findOrFail($id);
        $player->update($request->all());
        $request->session()->flash('alert-success', 'Player was successfully updated');
        return redirect(route("admin.players.index"));
    }

    public function players_destroy($id, Request $request)
    {
        $player = Player::findOrFail($id);
        $player->delete();
        $request->session()->flash('alert-success', 'Player was successfully deleted');
        return redirect(route("admin.players.index"));
    }

    //Teams controllers
    public function teams_index()
    {
        $teams = Team::orderBy('group', 'asc')->get();
        return view('admin/teams_index', compact('teams'));
    }

    public function teams_create()
    {
        $team = new Team();
        return view('admin/teams_create', compact('team'));
    }

    public function teams_store(TeamRequest $request)
    {
        Team::create($request->all());
        $request->session()->flash('alert-success', 'Team was successfully added');
        return redirect(route("admin.teams.index"));
    }

    public function teams_edit($id)
    {
        $team = Team::findOrFail($id);
        $players = Player::pluck('name', 'id')->whereIn("team_id", $team);

        return view('admin/teams_edit', compact('players','team'));
    }

    public function teams_update($id, TeamRequest $request)
    {
        $team = Team::findOrFail($id);
        $team->update($request->all());
        $request->session()->flash('alert-success', 'Team was successfully updated');
        return redirect(route("admin.teams.index"));
    }

    public function teams_destroy($id, Request $request)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        $request->session()->flash('alert-success', 'Team was successfully deleted');
        return redirect(route("admin.teams.index"));
    }

    //games controller
    public function games_index()
    {
        $games = Game::orderBy('mdate', 'asc')->get()->groupBy('mdate');
        $teams = Team::all();

        return view('admin/games_index', compact('games', "teams"));
    }

    public function games_create()
    {
        $game = new Game();
        $teams = Team::pluck('name', 'id');
        $stadiums = Stadium::pluck('name', 'id');
        return view('admin/games_create', compact('game', 'teams', 'stadiums'));

    }

    public function games_store(Request $request)
    {
        Game::create($request->all());
        $request->session()->flash('alert-success', 'Game was successfully added');
        return redirect(route("admin.games.index"));
    }

    public function games_edit($id)
    {
        $game = Game::findOrFail($id);

        $teams = Team::pluck('name', 'id');

        $team1 = Team::findOrFail($game->team1_id);
        $team2 = Team::findOrFail($game->team2_id);

        $players1 = Player::whereIn("team_id", $team1)->pluck('name', 'id');
        $players2 = Player::whereIn("team_id", $team2)->pluck('name', 'id');

        $stadiums = Stadium::pluck('name', 'id');


        return view('admin/games_edit', compact('players1', 'players2', 'team1', 'team2', 'game', 'stadiums', 'teams'));
    }

    public function games_update($id, Request $request)
    {
        $game = Game::findOrFail($id);

        $game->update($request->all());

        $request->session()->flash('alert-success', 'Game was successfully updated');
        return redirect(route("admin.games.index"));
    }

    public function games_destroy($id, Request $request)
    {
        $game = Game::findOrFail($id);
        $game->delete();
        $request->session()->flash('alert-success', 'Game was successfully deleted');
        return redirect(route("admin.games.index"));
    }

    //goal actions
    public function goals_create($id_game, $id_team)
    {
        $game = Game::findOrFail($id_game);
        $team = Team::findOrFail($id_team);
        $players = Player::whereIn("team_id", $team)->pluck('name', 'id');
        return view("admin/goals_create", compact("players", "team", "game"));
    }

    public function goals_store(Request $request, $id)
    {
        //dd($request->input());
        Goal::create($request->all());
        $request->session()->flash('alert-success', 'Goal was successfully added');
        return redirect(route("admin.games.edit", $id));
    }

    //users Controller

    public function users_index()
    {
        $users = User::all();
        return view('admin/users_index' ,compact('users'));
    }

    public function users_create()
    {
        $user = New user;
        return view('admin/users_create');

    }

    public function users_store(Request $request)
    {

        User::create($request->all());
        $request->session()->flash('alert-success', 'User was successfully added');
        return redirect(route("admin.users.index"));

    }


    public function users_edit($id)
    {
        $user = User::find($id);
        return view('admin/users_edit', compact('user') );
    }


    public function users_update($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        $request->session()->flash('alert-success', 'User was successfully updated');
        return redirect(route("admin.users.index"));
    }


    public function users_destroy($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->delete();
        $request->session()->flash('alert-success', 'User was successfully deleted');
        return redirect(route("admin.users.index"));
    }
}