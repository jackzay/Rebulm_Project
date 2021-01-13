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
Route::get('/', function () {
    return view('auth.login');
});

Route::get('admin/add_movies', 'MovieController@create');
Route::get('admin/{id}/edit_movie','MovieController@edit');

Route::get('admin/feedback', 'MovieController@index_feedback');
Route::delete('admin/feedback/{id}', 'MovieController@destroy_feedback');

// Route::get('admin/feedback/{id}/reply', 'MovieController@reply');



Route::resource('admin', MovieController::class);

Route::get('/home/movies', 'MovieController@index_user');
Route::get('home/movies/{id}/review', 'MovieController@review');
Route::post('home/movies/{id}/review', 'MovieController@store_feedback');
Route::post('/home/transaction', 'MovieController@create_transaction');
Route::post('/home/{id}/transaction', 'MovieController@end_transaction');
// Route::get('home/movies/{id}/rent', 'MovieController@transaction');

// Route::get('home/transaction/{id}', 'MovieController@transaction');

// Route::get('/feedback', function () {
//     return view('admin.feedback');
// });

Route::get('/home/profile', function () {
    return view('user.profile');
});
// Route::get('/review', function () {
//     return view('review');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });
Route::get('/transaksi', function () {
    return view('user.transaksi');
});
Route::get('/home/movies/{id_movie}/menu', function () {
    return view('user.menu');
});
Route::get('/faq', function () {
    return view('user.faq');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::patch('profile', 'MovieController@update_profile')
->name('user.profile');
