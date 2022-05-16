<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function seeker()
    {
        return view('register.seeker');
    }

    public function recruiter()
    {
        return view('register.recruiter');
    }
}
