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

Route::get('nous contactez', 'HomeController@contact')->name('contact');


Route::get('/produits/{slug}', 'ProductController@index')->name('produits.index');

Route::get('/catalogue/{categorie?}', 'CatalogueController@index')->name('catalogue');

Route::get('/catalogue/marque/{marque}', 'CatalogueController@marque')->name('catalogue.marque');

Route::get('/catalogue/tag/{tag}', 'CatalogueController@tag')->name('catalogue.tag');

Route::get('/produit/{categorie?}', 'CatalogueController@filter')->name('catalogue.filter');

Route::post('/search', 'CatalogueController@search')->name('search');

Route::get('/user/like/{id}', 'UserController@likes')->name('user.like');

Auth::routes();