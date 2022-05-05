<?php

namespace App\Http\Controllers;

use App\Models\Championship;
use Illuminate\Http\Request;

use App\Models\Game;

class GamesController extends Controller
{

    public function index()
    {
        $championship = Championship::orderByDesc('id')->first();

        if (!$championship) {
            return redirect()->route('home')->with('error', 'Não existe nenhum campeonato cadastrado');
        }
        return view('games', compact('championship'));
    }

    public function create()
    {
        return view('games.create');
    }
}
