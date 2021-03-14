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
    return view('theme1.index');
});


Route::get('/dashboard', function () {
    return view('theme1.dashboard');
});

Route::get('/tables', function () {
    return view('theme1.tables');
});

Route::get('/login', function () {
    return view('theme1.login');
});



Route::get('phpinfo', function () {
    phpinfo();
});

Route::resource('articles','App\Http\Controllers\ArticleController');
