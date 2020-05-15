<?php

namespace App\Http\Controllers;

use App\categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function idée()
    {
        return view('Catégo_idées');
    }
   /* public function idée()
    {
        return view('CatégorieTab');
    }*/
    public function sport()
    {
        return view('sports');
    }
    public function santé()
    {
        return view('santés');
    }
    public function index()
    {
        $Caté =  Categorie::all();
        return view('Catégo_idées',compact('Caté'));
    }
    /*public function show($id)
    {
      $Caté = Categorie::find($id);
      return view('Catégo_idées',compact('Caté'));
    }*/
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function edit($id)
    {
        $Caté = Categorie::find($id);
        return view('Catégorie.edit',compact('Caté'));
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, $id)
    {
        $this->validate($request,[
          'id' => 'required',
          'Catégories' => 'required',
        ]);
        Categorie::find($id)->update($request->all());
        return redirect()->route('Catégo_idées')->with('success','Catégorie bien modifier');
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function destroy($id)
    {
        Categorie::find($id)->delete();
        return redirect()->route('Catégo_idées')->with('success','Catégorie bien supprimé');
    }*/
}
