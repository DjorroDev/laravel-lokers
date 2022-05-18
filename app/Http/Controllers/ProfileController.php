<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile', [
            'user' => User::find(auth()->user()->id)
        ]);
    }
}
