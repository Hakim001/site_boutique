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

Route::get('/', 'HomeController@index')->name('home'); 


Route::get('/produits/{slug}', 'ProductController@index')->name('produits.index');

Route::get('/catalogue/{categorie?}', 'CatalogueController@index')->name('catalogue');

Route::get('/catalogue/marque/{marque}', 'CatalogueController@marque')->name('catalogue.marque');
