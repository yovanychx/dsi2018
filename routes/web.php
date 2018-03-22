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
    return view('pages.index');
});

Route::get('main', 'MainController@index');

Route::get('main/menu', 'MainController@menu')->name('menu');

Route::any('/', array('as' => 'index', 'uses' => 'MainController@index' ));

Route::any('menu', array('as' => 'menu', 'uses' => 'MainController@menu' ));