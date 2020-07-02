<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produit;

class ProduitController extends Controller
{
    public function show()
    {
        $title="Produit";

        $produit = Produit::all();

        return view('produits', ['produit'=>$produit], ['title'=>$titre]);
    }

    public function create(Request $request)
    {
        $nom =  $request['nom'];
        $description = $request['description'];
        $photo = $request['photo'];
        $prix_init = $request['prix_init'];
        $quantite = $request['quantite'];

        $produit = new Produit();

        $produit->nom = $nom;
        $produit->description = $description;
        $produit->photo = $photo;
        $produit->prix_init = $prix_init;
        $produit->quantite = $quantite;

        $produit->save();

        emotify('success', 'Pharmacie enregistrée avec succes!');


        return redirect()->back();
    }
}
