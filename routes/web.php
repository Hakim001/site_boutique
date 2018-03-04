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

Route::get('/nous contactez', 'HomeController@contact')->name('contact');
Route::post('/nous cotactez', 'HomeController@postcontact')->name('contact.post');

Route::get('page{slug}', 'HomeController@Page')->name('page');

Route::get('/produits/{slug}', 'ProductController@index')->name('produits.index');

Route::get('/catalogue/{categorie?}', 'CatalogueController@index')->name('catalogue');

Route::get('/catalogue/marque/{marque}', 'CatalogueController@marque')->name('catalogue.marque');

Route::get('/catalogue/tag/{tag}', 'CatalogueController@tag')->name('catalogue.tag');

Route::get('/produit/{categorie?}', 'CatalogueController@filter')->name('catalogue.filter');

Route::post('/search', 'CatalogueController@search')->name('search');

Route::get('/user/like/{id}', 'UserController@like')->name('user.like');

Route::get('/panier', 'PanierController@index')->name('panier');

Route::get('panier/add/{slug}','PanierController@add')->name('panier.add');

Route::get('panier/addOne/{id}','PanierController@addOne')->name('panier.addOne');
Route::get('panier/subOne/{id}','PanierController@subOne')->name('panier.subOne');

Route::get('panier/delete/{id}','PanierController@delete')->name('panier.delete');

Route::get('panier/validation','PanierController@valider')->name('panier.valider'); 
 
Route::post('panier/add', 'PanierController@addProduct')->name('panier.addProduct');


Route::group(['middleware'=>['auth']],function(){

	Route::get('panier/paiement','PanierController@payer')->name('panier.payer');
	
	Route::post('/paiement/stripe','PaiementController@checkoutStripe')->name('paiement.stripe');
	
	Route::get('/paiement/paypal','PaiementController@checkoutPaypal')->name('checkout.paypal');
	
	Route::get('/paiement/paypal/done','PaiementController@checkoutPaypalDone')->name('checkout.paypal.done');
	
	Route::get('/paiement/paypal/cancel','PaiementController@checkoutPaypalCancel')->name('checkout.paypal.cancel');

	
});

Auth::routes();


