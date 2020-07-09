<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produits;

class ProduitController extends Controller
{
    //

    public function index(){
        return view('ajouts_produits');
    }
    public function create(Request $request){
         $nom = $request['nom'];
         $description = $request['description'];
         $categorie = $request['categorie'];
         $prix_unitaire = $request['prix_unitaire'];
         $photo = $request['photo'];

         $produit = new Produits();

         $produit->nom = $nom;
         $produit->description = $description;
         $produit->categorie = $categorie;
         $produit->prix_unitaire = $prix_unitaire;
         $produit->photo = $photo;

         $produit->save();

         return redirect('ajouts_produits');
    }
    public function  liste(){

        $produit=produits::All();
  
      return view('liste_produits',[
          "produit"=>$produit 
      ]);
        }
}
