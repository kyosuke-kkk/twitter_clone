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

// Route::get('/', function () {
//     return view('welcome');
// });
//'/home'を削除することによって初期画面に飛ばない
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('tweets', 'TweetsController');

Route::get('create', 'TweetController@create');
Route::post('create', 'TweetController@store');
Route::get('show', 'TweetController@show');
Route::delete('delete/{id}', 'TweetController@destroy');

Route::get('show/{id}', 'UserController@show')->name('mypage');

Auth::routes();
