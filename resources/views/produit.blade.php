@extends('layouts')

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

@include('notify::messages')
@notifyJs

<form action="{{route('pharma_creat')}}" method="post">
@csrf
    <div class="row form-group">
        <div class="col-md-12">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" class="form-control">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <label for="coord">Coordonnées:</label>
            <input type="text" name="coordonnee" id="coord" class="form-control">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <label for="heur_d">Heure d'ouverture:</label>
            <input type="text" name="heur_d" id="heur_d" class="form-control">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <label for="heur_d">Heure de fermeture:</label>
            <input type="text" name="heur_f" id="heur_d" class="form-control">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <label for="contact">Contacts</label>
            <input type="text" name="contacts" id="contact" class="form-control">
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
    <th>Coordonnées</th>
    <th>Heure d'ouverture</th>
    <th>Heure de fermeture</th>
    <th>Contacts</th>
    <th>Options</th>
</tr>
@foreach($pharmacies as $pharmacie)
<tr>
    <td>{{$pharmacie->nom}}</td>
    <td>{{$pharmacie->coordonnee}}</td>
    <td>{{$pharmacie->heur_d}}</td>
    <td>{{$pharmacie->heur_f}}</td>
    <td>{{$pharmacie->contacts}}</td>
    <td>
        <a href="" class="btn btn-am btn-primary">Edite</a>
        <a href="{{ route('pharmacies.destroy', $pharmacie->id) }}" class="btn btn-am btn-danger">Delete</a>
        {{ method_field('DELETE') }}
    </td>
</tr>
@endforeach
</table>

@endsection