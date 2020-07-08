<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('page1', function () {
    return view('page1');
});

Route::get('vente', function () {
    return view('vente');
});

Route::get('ajouts_produits', function () {
    return view('ajouts_produits');
});


Route::get('liste_produits', function () {
    return view('liste_produits');
});


// Route::get('master', 'masterController@index')-name('master');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('ajouts_produits','ProduitController@index');
Route::post('ajouts_produits','ProduitController@create');
Route::get('liste_produits','ProduitController@liste');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


//CONTROLLEUR POUR LES PRODUIT 
// Route::post('ajouts_produits','ProduitControlleur@stock');
// Route::get('liste_produits', function () {
//     return view('liste_produits');
// });
