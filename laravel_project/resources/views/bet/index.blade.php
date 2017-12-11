@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Games to bet</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8" id="form-game">
                                <div class="form-group">
                                    {!! Form::open(['method' => 'get', 'url' => route('bets.create')]) !!}
                                    {!! Form::label('select-game', 'Game') !!}
                                    {!! Form::select('select-game', $final, ['class' => 'form-control']) !!}
                                    <button class="btn btn-primary">Submit</button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
@endsection
