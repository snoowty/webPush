<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

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

Route::get('push', function () {
    return view('push');
});

Route::get('test', function () {
    return view('test');
});

Route::get('hello', 'App\Http\Controllers\SelectController@index');

// Route::get('hello', function () {
//     return view('hello.index');
// });

// Route::get('hello', 'App\Http\Controllers\HelloController@index')
//     ->middleware(HelloMiddleware::class);
    
// Route::post('hello', 'App\Http\Controllers\HelloController@post');
