<?php

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
    return view('pages.home');
});
Route::get('esta', function () {
    return view('bootstrap-4-material-admin.index');
});

Route::get('main', function () {
    return view('pages.index');
});
Route::get('menu', function () {
    return view('pages.menu');
});
