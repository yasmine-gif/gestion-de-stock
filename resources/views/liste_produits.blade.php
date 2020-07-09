@extends('layouts/master')

@section('content')
<div>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/liste.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}" />
     
    <title>liste produit</title>
</head>
<body>
    <div class="" style="margin-top: 30px; background-color: rgb(255, 255, 255);">
        <div class="row">       
         @foreach($produit as $produit)
            <div class="col-md-4 ">
                <div class="jumbotron" style="text-align: center; width: 90%; height: 85%; border: 1px solid rgb(216, 213, 213); box-shadow: 0 14px 28px rgba(0,0,0,0.25),0 10px 10px rgba(245, 197, 197, 0.23);">
                    <a class="btn btn-danger" href="#" role="button" style="margin-left:70%;">MODIFY</a>
                    <a class="btn btn-lg" href="" role="button"><img src="{{$produit->photo}}" alt=""></a>
                    <h4>{{$produit->categorie}}</h4>
                    <h2>{{$produit->nom}}</h2>
                    <h6 style="color:red;">STOCKS:95</h6>
                    <h4>{{$produit->prix_unitaire}}fcfa</h4><br>
                    <h6>{{$produit->description}}</h6>
                    <a class="btn btn-primary btn-lg" href="vente" role="button">VENDRE</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>



@endsection
