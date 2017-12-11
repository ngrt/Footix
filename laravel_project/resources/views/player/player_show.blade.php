@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profil {{ $player->name }}</div>

                    <div class="panel-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="well well-sm">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">

                                            
                                                <img width="150px" height="150px" src="{{ asset('images/players/' . $player->url_photo) }}" />
                                                
                                            </div>
                                            <div class="col-sm-6 col-md-8">
                                                <h4><td>{{ $player->name }}</td></h4>
                                                <hr>
                                                <p>
                                                    <i class="">Position : {{ ucfirst($player->role->role ) }}</i>
                                                    <br />
                                                    <i class="">Team : {{ $player->team->name }}</i>
                                                    <br />
                                                    
                                                    <i class="">Group : {{ $player->team->group }}</i>
                                                    <br />
                                                    <i class="">Goals : {{ $player->goals }}</i>
                                                    <br />
                                                    <i class="">Yellow Cards : {{ $player->yellow_cards}}</i>
                                                    <br />
                                                    <i class="">Red Cards : {{ $player->red_cards}}</i>
                                                    <br />
                                                </p>
                                                <!-- Split button -->
                                                
                                            </div>
                                        </div>
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