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

// name gali buti bet koks stringas, bet vadinam pvz: 'products.index' pagal failu pavadinimus

// uz atvaizdavima
Route::get('/calculator', 'CalculatorController@index');
// uz skaiciavima
Route::post('/calculator', 'CalculatorController@calculate');
// atvaizdavimas index
Route::get('/kmicalc', 'KMIController@index');
// skaiciavimas
Route::post('/kmicalc', 'KMIController@calculate');
// products routai
Route::get('/', 'ProductController@index');
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products/create', 'ProductController@store')->name('products.store');


Route::get('/products/edit/{id}', 'ProductController@edit')->name('products.edit');
Route::post('/products/edit/{id}', 'ProductController@update')->name('products.update');


Route::get('/products/delete/{id}', 'ProductController@delete')->name('products.delete');
Route::get('/products/{id}', 'ProductController@show')->name('products.show');
// kategorjiu routai
Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
Route::post('/categories/create', 'CategoryController@store')->name('categories.store');
Route::get('/categories/delete/{id}', 'CategoryController@delete')->name('categories.delete');
Route::post('/comments/create', 'CommentController@store')->name('comments.create');

