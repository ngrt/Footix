@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">USER Dashboard</div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{ route('player.index') }}">
                                        <div class="dash-box dash-box-color-1">
                                            <div class="dash-box-body">
                                                <span class="dash-box-count">Players</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('teams.index') }}">
                                        <div class="dash-box dash-box-color-2">
                                            <div class="dash-box-body">
                                                <span class="dash-box-count">Teams</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('game.index') }}">
                                        <div class="dash-box dash-box-color-3">
                                            <div class="dash-box-body">
                                                <span class="dash-box-count">Games</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('bets.index') }}">
                                        <div class="dash-box dash-box-color-2">
                                            <div class="dash-box-body">
                                                <span class="dash-box-count">Bets</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('amount.add') }}">
                                        <div class="dash-box dash-box-color-2">
                                            <div class="dash-box-body">
                                                <span class="dash-box-count">Fill account</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
