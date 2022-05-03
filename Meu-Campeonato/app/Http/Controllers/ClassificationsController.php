<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Classification;

class ClassificationsController extends Controller
{
    public function index()
    {
        $classifications = Classification::all();
    }
}
