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

Route::get('/','PagesController@home');
Route::get('/products/{category}','PagesController@products');
Route::get('/wishlist','PagesController@wishlist');
Route::get('/login','PagesController@login');
Route::get('/signup','PagesController@signup');
Route::get('/shopping_bag','PagesController@bag');
Route::get('/product/{id}','PagesController@product');
Route::post('/search_bag/','PagesController@search');


Route::post('/add_to_bag','PagesController@add_to_bag');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
