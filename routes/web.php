<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(); 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Catégo_idées', 'CategorieController@idée')->name('Catégo_idées');
Route::get('Catégo_idées', 'CategorieController@index')->name('Catégo_idées');
Route::get('Catégorie.show', 'CategorieController@show')->name('Catégorie.show');
Route::get('Catégorie.edit', 'CategorieController@show')->name('Catégorie.edit');
Route::get('Catégorie', 'CategorieController@destroy')->name('Catégorie');

Route::resource('Catégorie','CategorieController');
Route::get('/sports', 'CategorieController@sport')->name('sports');
Route::get('/santés', 'CategorieController@santé')->name('santés');
Route::get('/signalements', 'SignalementController@signalement')->name('signalements');
Route::get('/publications', 'PublicationController@publication')->name('publications');
Route::get('Categorie.formulaire', 'CategorieController@formulaire');
Route::post('categorie', 'CategorieController@store');
Route::get('/formulaire', 'CategorieController@NouvelleCategorie');
//Route::get('/Catégo_idées', 'CategorieController@listCatégorie');
//Route::get('/IdéesFiles\idées', 'HomeController@index')->name('home');
Route::resource('publicationDossier','PublicationController');
Route::resource('IdeesFiles','IdeeController');
