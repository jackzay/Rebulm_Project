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

Route::get('/home', function () {
    return view('user.index');
});

Route::get('admin/add_movies', 'MovieController@create');
Route::get('admin/{id}/edit_movie','MovieController@edit');

Route::get('admin/feedback', 'MovieController@index_feedback');
Route::get('/review', 'MovieController@create_feedback');


Route::resource('admin', MovieController::class);

Route::get('/home/movies', 'MovieController@index_user');

// Route::get('/feedback', function () {
//     return view('admin.feedback');
// });

// Route::get('/profile', function () {
//     return view('profile');
// });
// Route::get('/review', function () {
//     return view('review');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });
// Route::get('/transaksi', function () {
//     return view('transaksi');
// });
// Route::get('/menu', function () {
//     return view('menu');
// });
// Route::get('/faq', function () {
//     return view('faq');
// });