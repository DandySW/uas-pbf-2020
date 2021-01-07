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

Auth::routes();
Route::get('/', 'CustomerController@index');
Route::get('product/{slug}', 'CustomerController@detailprod');
Route::get('/blog', 'CustomerController@blog');
Route::get('blog/{slug}', 'CustomerController@detailblog');
Route::get('mycart', 'CartController@index');




//CUSTOMER
Route::group(['middleware' => ['auth', 'customer']], function () {
    Route::post('mycart', 'CartController@addtocart')->name('mycart.addtocart');
    Route::put('mycart/{id}', 'CartController@plusminus')->name('mycart.plusminus');
    Route::delete('mycart/{id}', 'CartController@destroy')->name('mycart.destroy');

    Route::get('order-checkout', 'OrderController@checkout');
    Route::post('docheckout', 'OrderController@docheckout')->name('docheckout');
    Route::get('order-review', 'OrderController@orderreview');
});

//ADMIN
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'AdminController@index');
    Route::get('view-customers', 'AdminController@customers');
    Route::get('detailorder', 'AdminController@order');


    Route::resources([
        'categories' => 'CategoryController',
        'products' => 'ProductController',
        'blogs' => 'BlogController'
    ]);
});

