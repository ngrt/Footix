@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit a team</div>

                    <div class="panel-body">
                        @include('errors')
                        {!! Form::open(['method' => 'put', 'url' => route('admin.teams.update', $team)]) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', $team->name, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('coach', 'Coach') !!}
                            {!! Form::text('coach', $team->coach, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('group', 'Group') !!}
                            {!! Form::select('group', ["A" => "A", "B" => "B", "C" => "C", "D" => "D", "E" => "E", "F" => "F"], $team->group, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('flag', 'Flag url') !!}
                            {!! Form::text('flag', $team->flag, ['class' => 'form-control']) !!}
                        </div>
                        <button class="btn btn-primary">Submit</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
