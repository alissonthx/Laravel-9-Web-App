@extends('layouts.main')

@section('title', 'Partidas')

@section('content')

<div class="container">
    <form action="/teams" method="post">
        @csrf
        <div class="row">

            <div class="col-sm-3">
                <label for="teams">Time 1</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="col-sm-3">
                <label for="teams">Time 2</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="col-sm-3">
                <label for="teams">Time 3</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="col-sm-3">
                <label for="teams">Time 4</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="col-sm-3">
                <label for="teams">Time 5</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="col-sm-3">
                <label for="teams">Time 6</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="col-sm-3">
                <label for="teams">Time 7</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="col-sm-3">
                <label for="teams">Time 8</label>
                <input type="text" class="form-control" name="name" required>
            </div>
        </div>

        <div class="row mt-3 d-flex justify-content-center">
            <input class="btn btn-primary" style="width: 100px;" type="submit">
        </div>
    </form>

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