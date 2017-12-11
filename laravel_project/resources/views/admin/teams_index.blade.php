@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Teams Dashboard</div>

                    <div class="panel-body">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))
                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                            @endif
                        @endforeach
                        <table class="table table-striped custab">
                            <thead>
                            <a href="{{ route('admin.teams.create') }}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new team</a>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Coach</th>
                                <th>Group</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                        @foreach($teams as $team)
                            <tr>
                                <td>{{ $team->id }}</td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->coach }}</td>
                                <th>{{ $team->group }}</th>
                                <td class="text-center"><a class='btn btn-info btn-xs' href="{{ route('admin.teams.edit', $team) }}">Edit</a> {!! Form::open(['method' => 'delete', "route" => ['admin.teams.destroy', $team], "style" => 'display: inline']) !!} {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!} {!! Form::close() !!}</td>
                            </tr>

                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection