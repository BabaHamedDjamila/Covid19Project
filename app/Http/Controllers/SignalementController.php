<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignalementController extends Controller
{
    public function signalement()
    {
        return view('signalements');
    }
}
