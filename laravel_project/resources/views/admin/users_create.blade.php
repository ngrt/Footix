@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create a User</div>

                    <div class="panel-body">
                        @include('errors')
                        {!! Form::open(['method' => 'post', 'url' => route('admin.users.store')]) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::email('email', '', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('password', 'Password') !!}
                            {!! Form::password('password', array('placeholder'=>'Password', 'class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('url_photo', 'Photo') !!}
                            {!! Form::text('url_photo', null, ['class' => 'form-control']) !!}
                        </div>
                        <button class="btn btn-primary">Submit</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
