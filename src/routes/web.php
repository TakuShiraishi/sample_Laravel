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

Auth::routes();

Route::get('/', 'App\Http\Controllers\ArticleController@index')->name('articles.index'); // ここを追記

Route::resource('articles', 'App\Http\Controllers\ArticleController')->except('index'); // ここを編集

Auth::routes(); // bootstrap導入時に勝手に追記されている

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home'); // b