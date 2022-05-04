<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassificationsController extends Controller
{
    public function index()
    {
        return view('classifications');
    }
}
