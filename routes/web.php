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
    return view('customer.index');
});
Route::get('/cart', function () {
    return view('customer.cart');
});








Route::get('/admin/dashboard', function () {
    return view('admin.index');
});
Route::get('/admin/view', function () {
    return view('admin.view_customer');
});
Route::get('/admin/kategori', function () {
    return view('admin.kategori.view');
});
Route::get('/admin/produk', function () {
    return view('admin.produk.view');
});
Route::get('/admin/create', function () {
    return view('admin.produk.create');
});
Route::get('/admin/edit', function () {
    return view('admin.produk.edit');
});
Route::get('/admin/view', function () {
    return view('admin.kategori.create');
});
