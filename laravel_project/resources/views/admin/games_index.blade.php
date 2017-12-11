@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        Games Dashboard
                        <a href="{{ route("admin.games.create") }}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new game</a>
                    </div>

                    <div class="panel-body">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))
                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                            @endif
                        @endforeach

                        @foreach($games as $key => $games_date)
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Games of {{$games_date->first()->mdate}}</div>
                                    <div class="panel-body">
                                        <table class="table table-striped custab">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Team 1</th>
                                                <th></th>
                                                <th>Team 2</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </thead>
                                    @foreach($games_date as $key => $game)
                                        <tr>
                                            <th>{{ $game->id }}</th>
                                            <th>{{ $teams->find($game->team1_id)->name }}</th>
                                            <th>VS</th>
                                            <th>{{ $teams->find($game->team2_id)->name }}</th>
                                            <td class="text-center"><a class='btn btn-info btn-xs' href="{{ route('admin.games.edit', $game) }}">Edit</a>{!! Form::open(['method' => 'delete', "route" => ['admin.players.destroy', $game], "style" => 'display: inline']) !!} {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!} {!! Form::close() !!}</td>
                                        </tr>
                                    @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection