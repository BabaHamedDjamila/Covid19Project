<?php

namespace App\Http\Controllers;
use App\Idees;
use Illuminate\Http\Request;

class IdeeController extends Controller
{
    public function idées()
    {
       
        $idée = Idees::all();
        return view('IdeesFiles.idées',compact('idée'));
    }
}
