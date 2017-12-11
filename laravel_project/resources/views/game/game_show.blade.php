@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $game->stadium->name }} </div>

                    <div class="panel-body">
                        <div class="wrapper">
                            <div class="food">
                                <div class="cover" style="background-image: url({{asset('images/stadium/' .$game->name . "stadium.jpg") }})">

                                </div>
                                <div class="info recipe">
                                    <a href="#" class="recipe">
                                        <i>
                                            <svg x="0px" y="0px" width="26px" height="28px">
                                                <g>
                                                    <path d="M 8.5 20 L 8.5 21 L 17.5 21 L 17.5 20 L 8.5 20 ZM 8.5 16 L 8.5 17 L 17.5 17 L 17.5 16 L 8.5 16 ZM 8.5 12 L 8.5 13 L 17.5 13 L 17.5 12 L 8.5 12 ZM 20 0 C 19.4477 0 19 0.4477 19 1 L 19 6 C 19 6.5523 19.4477 7 20 7 C 20.5523 7 21 6.5523 21 6 L 21 1 C 21 0.4477 20.5523 0 20 0 ZM 13 0 C 12.4477 0 12 0.4477 12 1 L 12 6 C 12 6.5523 12.4477 7 13 7 C 13.5523 7 14 6.5523 14 6 L 14 1 C 14 0.4477 13.5523 0 13 0 ZM 6 0 C 5.4477 0 5 0.4477 5 1 L 5 6 C 5 6.5523 5.4477 7 6 7 C 6.5523 7 7 6.5523 7 6 L 7 1 C 7 0.4477 6.5523 0 6 0 ZM 15 4 L 18 4 L 18 3 L 15 3 L 15 4 ZM 8 4 L 11 4 L 11 3 L 8 3 L 8 4 ZM 3 4 L 4 4 L 4 3 L 3 3 C 1.3431 3 0 4.3431 0 6 L 0 25 C 0 26.6569 1.3431 28 3 28 L 23 28 C 24.6569 28 26 26.6569 26 25 L 26 6 C 26 4.3431 24.6569 3 23 3 L 22 3 L 22 4 L 23 4 C 24.1046 4 25 4.8954 25 6 L 25 25 C 25 26.1046 24.1046 27 23 27 L 3 27 C 1.8954 27 1 26.1046 1 25 L 1 6 C 1 4.8954 1.8954 4 3 4 Z" fill="#ffffff"/>
                                                </g>
                                            </svg>
                                        </i>
                                      
                                    </a>
                                    <div class="content">
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <br>
                                            
                                            <tr>
                                            <th>Match  {{$game->mdate}}</th>
                                        
                                            <th>{{ $team->find($game->team1_id)->name }}</th>
                                            <th><img width="20px" height="20px" src="{{ asset('images/flags/' . $team->find($game->team1_id)->flag) }}">
                                            </th>
                                            <th>VS</th>
                                            <th><img width="20px" height="20px" src="{{ asset('images/flags/' . $team->find($game->team2_id)->flag) }}"></th>
                                            <th>{{ $team->find($game->team2_id)->name }}</th>

                                        

                                        </tr>
                                        
                                    
                                               

                                                

                                                
                                            
                                            
                                    

                                            
                                                
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection