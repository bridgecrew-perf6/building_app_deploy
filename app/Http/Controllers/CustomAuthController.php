<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    //

    public function login()
    {
        $user = User::find(2);

        Auth::login($user);

        return redirect('/services');
    }

    public function CustomLogin($id)
    {
        $user = User::find($id);
        if (! $user)
        {
            $user = User::findOrFail($id);
            Auth::logout();
            return redirect('login');
        }

        Auth::login($user);

        return redirect('/services');
    }
}
