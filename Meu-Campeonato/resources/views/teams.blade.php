@extends('layouts.main')

@section('title', 'Partidas')

@section('content')

<div class="container">
    <form action="/teams" method="post">
        @csrf
        <div class="row">
            <h3 class="mt-3">Insira oito times para o campeonato!</h3>
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
</div>
@endsection