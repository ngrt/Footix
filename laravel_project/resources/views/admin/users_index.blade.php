@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">User Dashboard</div>

                    <div class="panel-body">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))
                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                            @endif
                        @endforeach
                        <table class="table table-striped custab">
                            <thead>
                            <a href="{{ route("admin.users.create") }}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new user</a>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                        @foreach($users as $user)
                        
                            
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                
                                <td class="text-center"><a class='btn btn-info btn-xs' href="{{ route('admin.users.edit', $user) }}">Edit</a>{!! Form::open(['method' => 'delete', "route" => ['admin.users.destroy', $user], "style" => 'display: inline']) !!} {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!} {!! Form::close() !!}</td>
                            </tr>

                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection