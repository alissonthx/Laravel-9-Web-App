@extends('layouts.main')

@section('title', 'Partidas')

@section('content')

<div class="container">
    <form action="{{ route('championships.store') }}" method="post">
        @method('POST')
        @csrf
        <div class="row">
            @if ($errors->any())
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            <h3 class="mt-3">Insira oito times para o campeonato!</h3>
            <div class="col-sm-3">
                <label for="teams">Time 1</label>
                <input type="text" class="form-control" name="name_1" required>
            </div>

            <div class="col-sm-3">
                <label for="teams">Time 2</label>
                <input type="text" class="form-control" name="name_2" required>
            </div>

            <div class="col-sm-3">
                <label for="teams">Time 3</label>
                <input type="text" class="form-control" name="name_3" required>
            </div>

            <div class="col-sm-3">
                <label for="teams">Time 4</label>
                <input type="text" class="form-control" name="name_4" required>
            </div>

            <div class="col-sm-3">
                <label for="teams">Time 5</label>
                <input type="text" class="form-control" name="name_5" required>
            </div>

            <div class="col-sm-3">
                <label for="teams">Time 6</label>
                <input type="text" class="form-control" name="name_6" required>
            </div>

            <div class="col-sm-3">
                <label for="teams">Time 7</label>
                <input type="text" class="form-control" name="name_7" required>
            </div>

            <div class="col-sm-3">
                <label for="teams">Time 8</label>
                <input type="text" class="form-control" name="name_8" required>
            </div>
        </div>

        <div class="row mt-3 d-flex justify-content-center">
            <input class="btn btn-primary" style="width: 100px;" type="submit">
        </div>
    </form>
</div>
@endsection
