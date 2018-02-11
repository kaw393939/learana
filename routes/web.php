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
Route::get('/meet-learana', function () {
    return view('pages.meet-learana');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/why-learana', function () {
    return view('pages.why');
});

Route::get('/discover', function () {
    return view('pages.discover');
});
Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/get-started', function () {
    return view('pages.signup');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
