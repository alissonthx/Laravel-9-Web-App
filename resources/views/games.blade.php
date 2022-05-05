@extends('layouts.main')

@section('title', 'Partidas')

@section('content')

<div class="container">

    <div class="row text-center mt-3">
        <h2>Quartas de Final</h2>
    </div>
    <div class="row d-flex justify-content-center">
        @foreach ($championship->games->filter(function ($g) {return $g->round == 'QF';}) as $game)
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jogo 0{{ (isset($i)) ? ++$i : $i = 1 }} </h5>
                    <p class="card-text"> {{$game->homeTeam->name}} X {{$game->awayTeam->name}} </p>
                    @if ($game->home_team_id == $game->winner_id)
                    <p class="card-text"> {{$game->winner_score}} X {{$game->loser_score}} </p>
                    @elseif ($game->away_team_id == $game->winner_id)
                    <p class="card-text"> {{$game->loser_score}} X {{$game->winner_score}} </p>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row text-center mt-3">
        <h2>Semifinal</h2>
    </div>
    <div class="row d-flex justify-content-center">
        @foreach ($championship->games->filter(function ($g) {return $g->round == 'SF';}) as $game)
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jogo 0{{ (isset($i)) ? ++$i : $i = 5 }}</h5>
                    <p class="card-text"> {{$game->homeTeam->name}} X {{$game->awayTeam->name}} </p>
                    @if ($game->home_team_id == $game->winner_id)
                    <p class="card-text"> {{$game->winner_score}} X {{$game->loser_score}} </p>
                    @elseif ($game->away_team_id == $game->winner_id)
                    <p class="card-text"> {{$game->loser_score}} X {{$game->winner_score}} </p>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row text-center mt-3">
        <h2>Final</h2>
    </div>
    <div class="row d-flex justify-content-center">
        @foreach ($championship->games->filter(function ($g) {return $g->round == 'F';}) as $game)
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jogo 07</h5>
                    <p class="card-text"> {{$game->homeTeam->name}} X {{$game->awayTeam->name}} </p>
                    @if ($game->home_team_id == $game->winner_id)
                    <p class="card-text"> {{$game->winner_score}} X {{$game->loser_score}} </p>
                    @elseif ($game->away_team_id == $game->winner_id)
                    <p class="card-text"> {{$game->loser_score}} X {{$game->winner_score}} </p>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
