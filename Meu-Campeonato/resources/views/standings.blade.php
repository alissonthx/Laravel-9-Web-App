@extends('layouts.main')

@section('title', 'Estatísticas')

@section('content')

<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Time</th>
            <th scope="col">Gols</th>
            <th scope="col">Vitórias</th>
            <th scope="col">Derrotas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teams as $team)
        <tr>
            <th scope="row">{{$team->id}}</th>
            <td>{{$team->name}}</td>
            <td>{{$team->goals}}</td>
            <td>{{$team->victories}}</td>
            <td>{{$team->loses}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection