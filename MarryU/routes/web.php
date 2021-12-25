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
    return view('Home.login');
});

Route::get('/loginadmin', function () {
    return view('Home.loginadmin');
});

Route::get('/registrasi', function () {
    return view('Home.registrasi');
});

Route::get('/products', function () {
    return view('Home.products');
});

Route::get('/gallery', function () {
    return view('Home.gallery');
});
Route::get('/cart', function () {
    return view('Home.booking');
});

Route::get('/profile', function () {
    return view('Home.profile');
});

Route::get('/contact', function () {
    return view('Home.contact');
});

// admin
Route::get('/admin', function () {
    return view('Admin.home');
});
Route::get('/admin/products', function () {
    return view('Admin.products');
});
Route::get('/admin/products/create', function () {
    return view('Admin.createproducts');
});
Route::get('/admin/products/update', function () {
    return view('Admin.updateproducts');
});
Route::get('/admin/profile', function () {
    return view('Admin.profile');
});
Route::get('/admin/about', function () {
    return view('Admin.about');
});