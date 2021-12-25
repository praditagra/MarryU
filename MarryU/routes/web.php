<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/loginadmin', function () {
    return view('loginadmin');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/products', function () {
    return view('Products.Index');
});

Route::get('/gallery', function () {
    return view('gallery');
});

// admin
Route::get('/admin', function () {
    return view('Admin.Home');
});
Route::get('/admin/products', function () {
    return view('Admin.Products');
});
Route::get('/admin/products/create', function () {
    return view('Admin.CreateProducts');
});
Route::get('/editproducts', function () {
    return view('Admin.UpdateProducts');
});
Route::get('/profile', function () {
    return view('Admin.Profile');
});