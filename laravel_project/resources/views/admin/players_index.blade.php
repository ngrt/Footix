@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Player Dashboard</div>

                    <div class="panel-body">
                        <table class="table table-striped custab">
                            <thead>
                            <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new player</a>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Team</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                        @foreach($players as $player)
                            <tr>
                                <td>{{ $player->id }}</td>
                                <td>{{ $player->name }}</td>
                                <td>{{ $player->role }}</td>
                                <th>{{ $player->team->name }}</th>
                                <td class="text-center"><a class='btn btn-info btn-xs' href="{{ route('admin.players_edit', ["id"=>$player->id]) }}"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                            </tr>

                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
