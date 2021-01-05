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

Route::get('/', 'IndexController@index');
Route::get('/product/{slug}', 'IndexController@detail');


Auth::routes();

// Kumpulan Route Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', function () {
        return view('admin.index');
    });
    Route::get('view', function () {
        return view('admin.view_customer');
    });

    // Grup Route Resource untuk Admin
    Route::resources([
        'categories' => 'CategoryController',
        'products' => 'ProductController'
    ]);
});

Route::get('/masuk', function () {
    return view('customer.login');
});
Route::get('/product-list', function () {
    return view('customer.product-list');
});
Route::get('/contact', function () {
    return view('customer.contact');
});
Route::get('/cart', 'CartController@index');
Route::get('/checkout', function () {
    return view('customer.checkout');
});
Route::get('/confirmation', function () {
    return view('customer.confirmation');
});
Route::get('/single', function () {
    return view('customer.single-product');
});
Route::get('/riwayat', function () {
    return view('customer.recently');
});
