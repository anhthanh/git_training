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


Route::get('/',['as'=>'getHomePage','uses'=>'PageController@getHomePage']);
Route::get('contacts',['as'=>'getContactsPage','uses'=>'PageController@getContactsPage']);
Route::get('products',['as'=>'getProductsPage','uses'=>'PageController@getProductsPage']);
Route::get('checkout',['as'=>'getCheckOutPage','uses'=>'PageController@getCheckOutPage']);
Route::get('register',['as'=>'getRegisterPage','uses'=>'PageController@getRegisterPage']);
Route::get('login',['as'=>'getLogInPage','uses'=>'PageController@getLogInPage']);
