<?php

use Illuminate\Support\Facades\Auth;
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
    return view('pages.homepage');
});

Route::get('/collection', function () {
    return view('pages.collection');
});

Route::get('/collection/{slug}', function () {
    return view('pages.detail');
});

Route::get('/cart', function () {
    return view('pages.cart');
});

Route::get('/me', function () {
    return view('pages.dashboard.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
