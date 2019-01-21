<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store()
    {

        $user = User::create(request()->only('email', 'password'));

        auth()->login($user);

        return redirect()->to('/');
    }

}
