<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
#LOGIN AND REGISTER
# 1 User
Route::get('/registrasi', [UserController::class, "regist_index"])->name('Index.Regist')->middleware('guest');
Route::post('/registrasi', [UserController::class, "regist"])->name('Regist')->middleware('guest');
Route::get('/login', [UserController::class, "login_index"])->name('Index.Login')->middleware('guest');
Route::post('/login', [UserController::class, "login"])->name('Login')->middleware('guest');
Route::post('/logout', [UserController::class, "logout"])->name('Logout')->middleware('auth');
Route::get('/profile', function () {
    return view('Home.profile');
});
# 2 Admin
Route::get('/loginadmin', [AdminController::class, "login_index"])->name('Admin.Index.Login')->middleware('guest');
Route::post('/loginadmin', [AdminController::class, "login"])->name('Admin.Login')->middleware('guest');
Route::get('/admin/profile', function () {
    return view('Admin.profile');
});


#PRODUCTS
# 1 User
Route::get('/products', function () {
    return view('Home.products');
});
# 2 Admin
Route::get('/admin/products', function () {
    return view('Admin.products');
});
Route::get('/admin/products/create', function () {
    return view('Admin.createproducts');
});
Route::get('/admin/products/update', function () {
    return view('Admin.updateproducts');
});

#GALERIES
# 1 User
Route::get('/gallery', function () {
    return view('Home.gallery');
});
# 2 Admin


#BOOKINGS
# 1 User
Route::get('/cart', function () {
    return view('Home.booking');
});
# 2 Admin
Route::get('/admin', function () {
    return view('Admin.home');
});


#CONTACT
# 1 User
Route::get('/contact', function () {
    return view('Home.contact');
});

# 2 Admin
Route::get('/admin/about', function () {
    return view('Admin.about');
});
