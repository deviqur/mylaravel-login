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

// Route::get('/', function () {
// 	echo "hello word, now :".date('Y-m-d H:i:s');
//     //return view('welcome');
// });

//nama uri, nama controller, nama function, nama root

Route::get('/','LoginController@index')->name('index.index');