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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/new', function () {
    return view('/pages/addLoveIt');
});

Route::get('/login', function () {
    return view('/pages/login');
});

Route::get('/profile', function () {
    return view('/pages/profile');
});

Route::get('/public', function () {
    return view('pages/publicFeed');
});

Route::get('/', function () {
    return view('/pages/splash');
});

Route::get('/private', function () {
    return view('/pages/userFeed');
});

Route::get('/edit', function () {
    return view('/pages/editprofile');
});
