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

Route::get('/', 'ProductsController@index');

Route::get('/dashboard', 'ProductsController@dashboard');

Route::get('/newproduct', 'ProductsController@newproduct');

Route::get('/products/{post}', 'ProductsController@viewproduct');

Route::get('/edit/{post}', 'ProductsController@editproduct');

// Add new product to database

Route::post('/products', 'ProductsController@store');

