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

/*Route::get('/', function () {
    return View('welcome');
});*/

Route::get('users', 'UsersController@get_user' );

Route::get('/', function () {
    return view('welcome', ['name' => 'Gabi']);
});

// Route::view('/welcome', 'welcome', ['name' => 'Gabi']);


Route::get('alma', function () {
    echo 'helo ez az alma';
});
