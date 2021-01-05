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
    Route::get('view', 'IndexController@view');

    // Grup Route Resource untuk Admin
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
// Route::get('/admin/viewcus', function () {
//     return view('admin.view_customer');
// });
