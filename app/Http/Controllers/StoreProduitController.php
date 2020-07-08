<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response; use App\Produits; use Image;
use Illuminate\Http\Request;

class StoreProduitController extends Controller
{
    //
    function index() { 
        $data =Produits::latest()->paginate(5);
         return view('store_produit', compact('data')) ->with('i', (request()->input('page', 1) - 1) * 5); 
        }
        
        function insert_produit(Request $request) { 

            $request->validate([ 'nom' => 'required', 'description' => 'required', 'prix_unitaire' => 'required','categorie' => 'required',  'photo' => 'required|image|max:2048' ]); 
            $produit_file = $request->photo; $photo = Image::make($produit_file);
             Response::make($photo->encode('jpeg')); $form_data = array( 'nom' => $request->nom,'description' => $request->description,'prix_unitaire' => $request->prix_unitaire,'categorie' => $request->categorie, 'photo' => $photo );
              Images::create($form_data); return redirect()->back()->with('success', 'Image store in database successfully');
            
            } 
              
              function fetch_produit($photo_id) { 
                  $photo = Produits::findOrFail($photo_id); 
                  $photo_file = Image::make($photo->photo);
                   $response = Response::make($photo_file->encode('jpeg'));
                    $response->header('Content-Type', 'image/jpeg'); 
                    return $response;
                 }
    
}
