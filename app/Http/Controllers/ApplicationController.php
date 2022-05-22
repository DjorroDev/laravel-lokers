<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('dashboard.application.index', [
            'apps' => Application::where('receiver_id', auth()->user()->id)->get()
        ]);
    }

    public function show(Application $application)
    {
        return view('dashboard.application.show', [
            'app' => $application
        ]);
    }
}
