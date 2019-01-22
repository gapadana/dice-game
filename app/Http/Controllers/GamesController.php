<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GamesController extends Controller
{
    public function show()
    {
        return view('games');
    }
}
