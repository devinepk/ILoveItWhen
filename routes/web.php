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

Route::get('/addnew', function () {
    return view('addSpaces');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/addUser/{id}', function ($id) {
    $space = \App\Space::find($id);
    return view('addUser', compact('space'));
});

Route::get('/public', function () {
    return view('publicFeed');
});

Route::get('/', function () {
    return view('splash');
});

Route::resource('/private', 'PostController')->middleware('auth');

Route::resource('/spaces', 'SpaceController')->middleware('auth');

Auth::routes();

Route::get('/private', function () {
    $user = \Auth::user();
    return view('userFeed', compact('user'));
});
