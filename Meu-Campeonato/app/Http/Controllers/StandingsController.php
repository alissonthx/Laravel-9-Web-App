<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Standing;

class StandingsController extends Controller
{
    public function index()
    {
        $standings = Standing::all();
    }
}
