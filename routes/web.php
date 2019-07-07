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

//
//Route::get('/{any}', 'MainController@main')->where('any', '.*');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{any}','HomeController@index')->where('path','.*');

// Category Routes  Start

Route::post('/addCategory', 'CategoryController@addCategory');

Route::get('/allCategory', 'CategoryController@allCategory');




//Brands Routes   Start

Route::post('/addBrand', 'BrandController@addBrand');


//purchase  Router Start

Route::post('/addPurchase', 'PurchaseController@addPurchase');


