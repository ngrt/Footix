@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        Match Group C
                        
                    </div>

                    <div class="panel-body">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))
                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                            @endif
                        @endforeach

                        @foreach($games as $key => $games_date)
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Match  {{$games_date->first()->mdate}}</div>
                                    <div class="panel-body">
                                        <table class="table table-striped custab">
                                            <thead>
                                            <tr>
                                                
                                                
                                                
                                            </tr>
                                            
                                            </thead>
                                    @foreach($games_date as $key => $game)
                                        <tr data-href="{{ route('game.show', $game->id) }}">
                                            <th>{{ $teams->find($game->team1_id)->name }}</th>
                                            <th><img width="20px" height="20px" src="{{ asset('images/flags/' . $teams->find($game->team1_id)->flag) }}">
                                            </th>
                                            <th>VS</th>
                                            <th><img width="20px" height="20px" src="{{ asset('images/flags/' . $teams->find($game->team2_id)->flag) }}"></th>
                                            <th>{{ $teams->find($game->team2_id)->name }}</th>
                                            
                                            
                                        </tr>
                                    @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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