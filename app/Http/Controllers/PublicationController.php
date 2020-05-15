<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Publications;

class PublicationController extends Controller
{
    public function publication()
    {
        $Pub = Publications::all();
        return view('publicationDossier.publication',compact('Pub'));
    }
}
