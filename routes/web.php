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
    return view('contents.home');
});

Route::get('home', function () {
    return view('contents.home');
}) ->name('home');

Route::get('about', function () {
    return view('contents.about');
}) ->name('about');

Route::get('portfo', function () {
    return view('contents.portfo');
}) ->name('portfo');