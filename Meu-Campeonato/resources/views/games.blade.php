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
                    <h5 class="card-title">Jogo {{ (isset($i)) ? ++$i : $i = 1 }} </h5>
                    <p class="card-text"> {{$game->homeTeam->name}} X {{$game->awayTeam->name}} </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row text-center mt-3">
        <h2>Semifinal</h2>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jogo 05</h5>
                    <p class="card-text">$team X $team</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jogo 06</h5>
                    <p class="card-text">$team X $team</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row text-center mt-3">
        <h2>Final</h2>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jogo 07</h5>
                    <p class="card-text">$team X $team</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
