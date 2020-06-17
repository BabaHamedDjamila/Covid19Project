<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Publications;
use Illuminate\Support\Facades\Storage;
//use Intervention\Image\Facades\Image;

use DB;
class PublicationController extends Controller
{   /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
    public function index()
    {
        $Pub = Publications::all();
        return view('publicationDossier.index')->with('Pub', $Pub);
    }
     /**
     * Display the specified resource.
     *
     * @param int $id
     * @param  \App\Publications $Pub
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $Pub = Publications::find($id);
      return view('publicationDossier.show')->with('Pub',$Pub);
    }
    public function edit($id)
    {
        $Pub = Publications::find($id);
        
        //Check if post exists before deleting
        if (!isset($Pub)){
            return redirect('/publicationDossier')->with('error', 'No Post Found');
        }

        // Check for correct user
        if(auth()->user()->id !==$Pub->user_id){
            return redirect('/publicationDossier')->with('error', 'Unauthorized Page');
        }

        return view('publicationDossier.edit')->with('Pub', $Pub);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Titre' => 'required',
            'Contenue' => 'required',
            'Catégories' => 'required',
            'Images'         =>  'required|Images|max:2048',
            'Videos' => 'required',
            'Date' => 'required',
        ]);
         
	/*	$Pub = Publications::find($id);
         // Handle File Upload
        if($request->hasFile('Images')){
            // Get filename with the extension
            $filenameWithExt = $request->file('Images')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('Images')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('Images')->storeAs('public/Images', $fileNameToStore);
            // Delete file if exists
            Storage::delete('public/Images/'.$Pub->Images);
		
	   //Make thumbnails 
	    $thumbStore = 'thumb.'.$filename.'_'.time().'.'.$extension;
            $thumb = Image::make($request->file('Images')->getRealPath());
            $thumb->resize(80, 80);
            $thumb->save('storage/ImagesFiles/'.$thumbStore);
        }*/
        // Update Post
        $Pub = Publications::find($id);
        $Pub->Titre = $request->input('Titre');
        $Pub->Contenue = $request->input('Contenue');
        $Pub->Catégories = $request->input('Catégories');
        $Pub->Lien = $request->input('Lien');
        if($request->hasFile('Images')){
         // $Pub->Images = $fileNameToStore;
      }
        $Pub->Videos = $request->input('Videos');
        $Pub->Date = $request->input('Date');
        
        $Pub->save();

        return redirect('/publicationDossier')->with('success', 'Publication modifier');
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Publications::find($id)->delete();
        return redirect()->route('publicationDossier.index')->with('success','Post deleted success');
    }
}
