@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit a game</div>

                    <div class="panel-body">
                        @include('errors')
                        {!! Form::open(['method' => 'post', 'url' => route('admin.games.store', $game)]) !!}
                        <div class="row">
                            <div class="col-md-6" id="form-game">
                                <div class="form-group">
                                    {!! Form::label('team1_id', 'Team 1') !!}
                                    {!! Form::select('team1_id', $teams, null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('score1', 'Score') !!}
                                    {!! Form::text('score1', $game->score1, ['class' => 'form-control', 'id' => 'score-1']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('odd1', 'Odd') !!}
                                    {!! Form::text('odd1', $game->odd1, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('team2_id', 'Team 2') !!}
                                    {!! Form::select('team2_id', $teams, null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('score2', 'Score') !!}
                                    {!! Form::text('score2', $game->score2, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('odd2', 'Odd') !!}
                                    {!! Form::text('odd2', $game->odd2, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('odd_draw', 'Odd draw') !!}
                            {!! Form::text('odd_draw', $game->odd_draw, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('mdate', 'Date') !!}
                            {!! Form::text('mdate', $game->mdate, ['class' => 'datepicker form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('stadium_id', 'Stadium') !!}
                            {!! Form::select('stadium_id', $stadiums, $game->stadium_id, ['class' => 'form-control']) !!}
                        </div>
                        <button class="btn btn-primary">Submit</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">

</script>
@endsection