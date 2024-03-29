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
    return view('index');
});
Route::get('/movies', function () {
    return view('videos');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/review', function () {
    return view('review');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/transaksi', function () {
    return view('transaksi');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/faq', function () {
    return view('faq');
});
