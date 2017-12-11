@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add cash</div>

                    <div class="panel-body">
                        {!! Form::open(['method' => 'post', 'url' => route('amount.store')]) !!}
                        <div class="row">
                            <div class="col-md-8" id="form-game">
                                <div class="form-group">
                                    {!! Form::label('amount', 'Amount to add') !!}
                                    {!! Form::text('amount', null, ['class' => 'form-control']) !!}
                                </div>
                                <button class="btn btn-primary">Submit</button>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
