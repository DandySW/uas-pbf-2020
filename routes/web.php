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

Route::get('/', 'CustomerController@index');
Route::get('/product/{slug}', 'CustomerController@detailprod');

//CUSTOMER
Route::group(['middleware' => ['auth']], function () {
    #code here
});

//ADMIN
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'AdminController@index');
    Route::get('view-customers', 'AdminController@customers');

    Route::resources([
        'categories' => 'CategoryController',
        'products' => 'ProductController'
    ]);
});

Route::get('/cart', 'CartController@index');
Route::get('/checkout', function () {
    return view('customer.checkout');
});
Route::get('/confirmation', function () {
    return view('customer.confirmation');
});
Route::get('/riwayat', function () {
    return view('customer.recently');
});

Auth::routes();
