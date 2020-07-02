@extends('layouts.defaulte')

@section('title', $title)

@section('sous-title')

<h1 class="title">{{$title}}</h1>

@endsection

@section('commentaire')
    <p class="text">Ceci est une application web</p>
@endsection

@section('image')

@endsection

@section('form')

<form action="{{route('produit_create')}}" method="post">
@csrf
    <div class="row form-group">
        <div class="col-md-12">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" class="form-control">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <label for="des">Description:</label>
            <input type="text" name="descriptions" id="des" class="form-control">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <label for="quantite">Quantité:</label>
            <input type="number" name="quantite" id="quantite" class="form-control">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <label for="prix">Prix unitaire:</label>
            <input type="number" name="prix_init" id="prix" class="form-control">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <label for="photo">Photo</label>
            <input type="file" name="photo" id="photo" class="form-control">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <button type="submit" class="btn btn-success w-40 float-right">Creer</button>
        </div>
    </div>
</form>

@endsection

@section('table')

<table class="table table-striped table-hover">
<tr>
    <th>Nom</th>
    <th>Description</th>
    <th>Quantité</th>
    <th>Prix unitaire</th>
    <th>Photo</th>
    <th>Options</th>
</tr>
@foreach($produits as $produit)
<tr>
    <td>{{$produit->nom}}</td>
    <td>{{$produit->descriptions}}</td>
    <td>{{$produit->quantite}}</td>
    <td>{{$produit->prix_init}}</td>
    <td>{{$produit->photo}}</td>
    <td>
        <a href="" class="btn btn-am btn-primary">Edite</a>
        <a href="{{ route('produit_destroy', $produit->id) }}" class="btn btn-am btn-danger">Delete</a>
        {{ method_field('DELETE') }}
    </td>
</tr>
@endforeach
</table>

@endsection