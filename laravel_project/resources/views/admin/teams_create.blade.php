@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create a team</div>

                    <div class="panel-body">
                        @include('errors')
                        {!! Form::open(['method' => 'post', 'url' => route('admin.teams.store')]) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('coach', 'Coach') !!}
                            {!! Form::text('coach', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('group', 'Group') !!}
                            {!! Form::select('group', ["A" => "A", "B" => "B", "C" => "C", "D" => "D", "E" => "E", "F" => "F"], null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('flag', 'Flag url') !!}
                            {!! Form::text('flag', null, ['class' => 'form-control']) !!}
                        </div>
                        <button class="btn btn-primary">Submit</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
