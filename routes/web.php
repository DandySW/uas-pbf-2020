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
Route::get('blog/{slug}', 'CustomerController@detailblog');
Route::get('mycart', 'CartController@index');
Route::get('/blog', 'CustomerController@blog');


//CUSTOMER
Route::group(['middleware' => ['auth']], function () {
    Route::post('mycart', 'CartController@addtocart')->name('mycart.addtocart');
    Route::delete('mycart/{id}', 'CartController@destroy')->name('mycart.destroy');
    Route::put('mycart/{id}', 'CartController@plusminus')->name('mycart.plusminus');
    // Route::patch('mycart/{id}', 'CartController@minuscart')->name('mycart.minuscart');
});

//ADMIN
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'AdminController@index');
    Route::get('view-customers', 'AdminController@customers');

    Route::resources([
        'categories' => 'CategoryController',
        'products' => 'ProductController',
        'blogs' => 'BlogController'
    ]);
});

Route::get('/checkout', function () {
    return view('customer.checkout');
});
Route::get('/confirmation', function () {
    return view('customer.confirmation');
});
Route::get('/riwayat', function () {
    return view('customer.recently');
});
