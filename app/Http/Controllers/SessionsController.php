<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function store()
    {


        // attempt to do the login

        if (auth()->attempt(request()->only('email', 'password'))) {

            // validation successful
            // do whatever you want on success
            return redirect()->to('/');

        } else {

            // validation not successful, send back to form

            return redirect()->to('/register');
        }
    }


    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/');
    }
}
