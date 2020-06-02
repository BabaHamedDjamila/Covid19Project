<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Publications;

class PublicationController extends Controller
{   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function publication()
    {
        $Pub = Publications::all();
        return view('publicationDossier.publication',compact('Pub'));
    }
}
