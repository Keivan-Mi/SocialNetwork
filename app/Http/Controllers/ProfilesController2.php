<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController2 extends Controller
{
    public function index($user)
    {
        $user = \App\User::findOrFail($user);

        return view('profiles.index', [
            'user' => $user
        ]);
    }
}
