<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Team;


class StandingsController extends Controller
{

    public function index()
    {
        $teams = Team::all();
        return view('standings', compact('teams'));
    }
}
