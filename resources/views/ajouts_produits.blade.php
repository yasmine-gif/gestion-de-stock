@extends('layouts/master')
<style>   .av5{
                 background-color:red;
                 height:50px;}
                  </style>
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}" />
     
    <source src="{{asset('js/boostrap.min.js')}}">
    <title>AJOUTER UN PRODUIT</title>
</head>
<body>

<div class="esapace_milieu2 " >  <h1 class="ml-2" > Ajouter un produit</h1>

 <form action="ajouts_produits" method="POST" > 
@csrf
<div class="form-group">
    
  <div class="form-group">
    <label for="exampleFormControlInput1">Nom</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter le Nom du Produit" name="nom" >

  </div>

  
<hr><br>

  <div class="form-group">
    <label for="formation">Description</label>
    <textarea class="form-control" id="formation" placeholder="Description du produit" rows="2"  name="description"></textarea>
  </div>
 
  
  <div class="form-group">
    <label for="exampleFormControlInput1">CATEGORIE</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="categorie" name="categorie" >

  </div>


<div class="form-group"> <br>
    <label for="prix">PRIX UNITAIRE</label>
    <input type="text" class="form-control" id="prix" placeholder="Le Prix Unitaire" rows="2"  name="prix_unitaire"></input>
  </div>
  <hr>
  </div>
  <div class="form-group">
                        
                        <div class="custom-file  ">
                         <label class="custom-file-label " for="validatedCustomFile"><h4 >Choisir une photo...</h4></label>
                            <input type="file" name="photo"  class="custom-file-input {{ $errors->has('photo') ? ' is-invalid': ' ' }}" id="validatedCustomFile">
                           
                            @if ($errors->has('photo'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('photo') }}</strong>
                                </span>
                            @endif
                        </div>

<div class="mt-5">
   <button type="submit" class="btn btn-primary border border-danger">ENREGISTRER</button>
   <button type="reset" class="btn btn-primary border border-danger">ANNULER</button>
</div>
   </form>
       
   </div>


</body>
</html>
@endsection
