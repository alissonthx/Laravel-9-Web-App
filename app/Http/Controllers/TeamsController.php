<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Team;

class TeamsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $team = new Team();
        $team->name = $request->name;
        $team->save();

        return redirect('/games');
    }
}
