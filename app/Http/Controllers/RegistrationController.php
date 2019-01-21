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

        $this->validate(request(), [
            'email' => 'required|email',
            'pass' => 'required'
        ]);

        $user = User::create(request([ 'email', 'password']));

        auth()->login($user);

        return redirect()->to('/');
    }

}
