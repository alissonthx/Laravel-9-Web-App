@extends('layouts.main')

@section('title', 'Partidas')

@section('content')

<div class="container">

    <div class="row text-center mt-3">
        <h2>Quartas de Final</h2>

    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jogo 01</h5>
                    <p class="card-text">$team X $team</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jogo 02</h5>
                    <p class="card-text">$team X $team</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jogo 03</h5>
                    <p class="card-text">$team X $team</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jogo 04</h5>
                    <p class="card-text">$team X $team</p>
                </div>
            </div>
        </div>
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