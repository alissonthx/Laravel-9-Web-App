<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class ClassificationsController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('classifications', compact('teams'));
    }
}
