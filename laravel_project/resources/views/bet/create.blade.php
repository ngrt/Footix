@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">Your bet</div>

                    <div class="panel-body">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))
                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                            @endif
                        @endforeach
                        <div class="bet">
                            <h3>{{ $teams->find($game->team1_id)->name }} - {{ $teams->find($game->team2_id)->name }}</h3>
                            <p>Win : {{ $game->odd1 }}</p>
                            <p>Lose : {{ $game->odd2 }}</p>
                            <p>Draw : {{ $game->odd_draw }}</p>
                            {!! Form::open(['method' => 'post', 'url' => route('bets.store')]) !!}
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input id="amount" name="amount" type="number" min='0' max="{{$user->balance}}">
                                    <p>Your balance : {{ $user->balance }}</p>
                                </div>
                                <input name="match_id" type="hidden" value="{{ $game->id }}">
                                <input name="user_id" type="hidden" value="{{ $user->id }}">
                                <div class="form-group">
                                    <label for="type">Your bet</label>
                                    <select name="type" id="type">
                                        <option value="0">Draw</option>
                                        <option value="1">Win</option>
                                        <option value="2">Lose</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary">Bet !</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script>
            $(function () {
                $('#amount').on('input', function () {

                    var value = $(this).val();

                    if ((value !== '') && (value.indexOf('.') === -1)) {

                        $(this).val(Math.max(Math.min(value, {{$user->balance}}), 0));
                    }
                });
            });
        </script>
@endsection
