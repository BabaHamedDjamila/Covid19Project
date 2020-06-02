<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Signalements;
class SignaleController extends Controller
{ /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function signalement()
    {
        $signale = Signalements::all();
        return view('SignaleFiles.signalement',compact('signale'));
    }
}
