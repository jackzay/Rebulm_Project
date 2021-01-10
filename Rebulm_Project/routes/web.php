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

Route::get('/admin', function () {
    return view('admin.home_admin');
});
Route::get('/add_movies', function () {
    return view('admin.add_movies');
});
Route::get('/edit_movies', function () {
    return view('admin.edit_movies');
});
Route::get('/feedback', function () {
    return view('admin.feedback');
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
