<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}">
    <source src="{{asset('js/boostrap.min.js')}}">
    <title>Document</title>
</head>
<body>
<form id="form-vente">
        <legend class="col-sm-16"> <b> AJOUTER  UN PRODUIT</b></legend>
        <div class="form-group row">
          <label for="inputProduit" class="col-sm-3 col-form-label">NOM :</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputProduit">
            <label for="inputProduit" class="col-sm-3 col-form-label">DESCRIPTION :</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputProduit">
          <label for="inputProduit" class="col-sm-3 col-form-label">CATEGORIE :</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputProduit">
        
        <div class="form-group row">
          <label for="inputQuantite" class="col-sm-3 col-form-label">Quantité :</label>
          <div class="col-sm-5">
            <input type="number" class="form-control" id="inputQuantite">
          </div>
        </div>
        <div class="form-group row">
            <label for="inputMontantd" class="col-sm-3 col-form-label">Montant donné :</label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="inputMontantd">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputMontantr" class="col-sm-3 col-form-label">Montant remis :</label>
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