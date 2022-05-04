@extends('layouts.main')

@section('title', 'Classificação')

@section('content')

<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Time</th>
            <th scope="col">Pontos</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teams as $team)
        <tr>
            <th scope="row">{{$team->id}}</th>
            <td>{{$team->name}}</td>
            <td>{{$team->score}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection