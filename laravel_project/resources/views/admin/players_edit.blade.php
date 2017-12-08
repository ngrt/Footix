@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit a player</div>

                    <div class="panel-body">
                        {!! Form::open(['method' => 'put', 'url' => route('admin.players_update', $player)]) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', $player->name, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <!-- Change gor the select option -->
                            {!! Form::label('team_id', 'Team') !!}
                            {!! Form::select('team_id', $teams, $player->team_id, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <!-- Change gor the select option -->
                            {!! Form::label('role', 'Role') !!}
                            {!! Form::text('role', $player->role, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('role', 'Role') !!}
                            {!! Form::text('role', $player->goals, ['class' => 'form-control', 'disabled']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('yellow', 'Yellow cards') !!}
                            {!! Form::text('yellow', $player->yellow_cards, ['class' => 'form-control', 'disabled']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('red', 'Red cards') !!}
                            {!! Form::text('red', $player->red_cards, ['class' => 'form-control', 'disabled']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('games', 'Games') !!}
                            {!! Form::text('games', $player->games, ['class' => 'form-control', 'disabled']) !!}
                        </div>
                        <button class="btn btn-primary">Submit</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
