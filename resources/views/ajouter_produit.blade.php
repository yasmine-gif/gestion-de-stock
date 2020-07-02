<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}">
    <source src="{{asset('js/boostrap.min.js')}}">
    <title>AJOUTER UN PRODUIT</title>
</head>
<body>
<form>
<div class="container">
    <h1>AJOUTER UN PRODUIT</h1>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-auto col-form-label col-form-label-sm">NOM</label>
    <div class="col">
      <input type="textarea" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Entrer le nom de produit">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-auto col-form-label">DESCRIPTION</label>
    <div class="col-sm-10">
      <input type="textarea" class="form-control" id="colFormLabel" placeholder="Description">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">CATEGORIE</label>
    <div class="col-sm-10">
      <input type="testarea" class="form-control form-control" id="colFormLabelLg" placeholder="categorie">
    </div>
    <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">PRIX UNITAIRE</label>
    <div class="col-sm-10">
      <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Le prix du produit">
    </div>
    <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">PHOTO</label>
    <div class="col-sm-10">
      <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Ajouter un fichier">
    </div>
    <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">QUANTITE</label>
    <div class="col-sm-10">
      <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Ajouter la quantite du produit">
    </div>
    <button type="button" class="btn btn-primary btn-lg">ENREGISTRER</button>
<button type="button" class="btn btn-secondary btn-lg">ANNULER</button>
  </div>
</form>
</body>
</html>