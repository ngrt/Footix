@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Player Dashboard</div>

                    <div class="panel-body">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))
                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                            @endif
                        @endforeach
                        <table class="table table-striped custab">
                            <thead>
                            <a href="{{ route("admin.players.create") }}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new player</a>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Team</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                        @foreach($players as $player)
                        <!--<img src="{{ asset('images/players/' . $player->url_photo) }}">-->
                            
                            <tr>
                                <td>{{ $player->id }}</td>
                                <td>{{ $player->name }}</td>
                                <td>{{ ucfirst($player->role->role) }}</td>
                                <th>{{ $player->team->name }}</th>
                                <td class="text-center"><a class='btn btn-info btn-xs' href="{{ route('admin.players.edit', $player) }}">Edit</a>{!! Form::open(['method' => 'delete', "route" => ['admin.players.destroy', $player], "style" => 'display: inline']) !!} {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!} {!! Form::close() !!}</td>
                            </tr>

                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
