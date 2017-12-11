@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add a goal</div>

                    <div class="panel-body">
                        @include('errors')
                        {!! Form::open(['method' => 'post', 'url' => route('admin.goals.store', $game->id)]) !!}
                        <div class="form-group">
                            {!! Form::label('team_id', 'Team_id') !!}
                            {!! Form::text('team_id', $team->id, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('game_id', 'Game_id') !!}
                            {!! Form::text('game_id', $game->id, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('player_id', 'Scorer') !!}
                            {!! Form::select('player_id', $players, null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('gtime', 'Goal time') !!}
                            {!! Form::text('gtime', null, ['class' => 'form-control']) !!}
                        </div>
                        <button class="btn btn-primary">Submit</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
