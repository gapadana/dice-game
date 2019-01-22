<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Games;
use App\Http\Requests;

class CreationController extends Controller
{
    public function show()
    {
        if (auth()->check()) {
            return view('create');
        }
        return back()->withErrors(['msg', 'log in first']);

    }

    public function create(Request $request)
    {

        $creator = auth()->id();
        Games::create(array('creator' => $creator, 'max_score' => $request->input('max'), 'lose_dice' => $request->input('role'), 'dice_number' => $request->input('dices'), 'trow_limit' => $request->input('throw')));
        return view('created');

    }

}
