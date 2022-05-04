<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;

class GamesController extends Controller
{

    public function index()
    {
        $games = Game::all();

        return view('games', compact('games'));
    }

    public function create()
    {
        return view('games.create');
    }
}
