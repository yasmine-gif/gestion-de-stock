@extends('layouts/master')
<style>   .av5{
                 background-color:red;
                 height:50px;}
                  </style>
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/formulaire-vente.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/style.css') }}" />
     
    <title>Formulaire de vente</title>
 
</head>
<body>
    
    <form id="form-vente">
        <legend class="col-sm-16"> <h2><b class="texte1"> VENDRE UN PRODUIT</b></h2></legend>
        <div class="form-group row">
          <label for="inputProduit" class="col-sm-3 col-form-label "><h4 class="texte1">Produit achété </h4>:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputProduit">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputQuantite" class="col-sm-3 col-form-label"><h4 class="texte1">Quantité :</h4></label>
          <div class="col-sm-5">
            <input type="number" class="form-control" id="inputQuantite">
          </div>
        </div>
        <div class="form-group row">
            <label for="inputMontantd" class="col-sm-3 col-form-label"><h4 class="texte1"> Montant donné :</h4></label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="inputMontantd">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputMontantr" class="col-sm-3 col-form-label"><h4 class="texte1"> Montant remis :</h4></label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="inputMontantr">
            </div>
          </div>
        <div class="form-group row">
          <div class="col-sm-5">
            <button type="submit" class="btn btn-primary">Vendre</button>
          </div>
        </div>
      </form>
</body>
</html>

@endsection


