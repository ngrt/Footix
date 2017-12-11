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
                        
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Team</th>
                                
                            </tr>
                            </thead>
                        @foreach($players as $player)
                        
                            
                            <tr data-href="{{ route('player.show', $player->id) }}">
                                <td><img width="50px" height="50px" src="{{ asset('images/players/' . $player->url_photo) }}"></td>
                                <td>{{ $player->name }}</td>
                                <td>{{ ucfirst($player->role->role ) }}</td>
                                <th>{{ $player->team->name }}</th>
                                
                            </tr>

                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function() {

            $("tr").click(function(){

                window.location = $(this).data("href");

            });

            $("tr").hover(function() {

                $(this).css( 'cursor', 'pointer' )

                    .toggleClass("bg-info")

                    .siblings(".selected")

                    .removeClass("selected");

            });

        });

    </script>
@endsection
