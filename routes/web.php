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
// html fails ir jāstibī uz views mapi

Route::get('/', function () {

    return view('welcome');
});

Route::get('/test', function () {
    return view ('test');

});

Route::get('/satan', function () {
    return ' BURN';
});

Route::get('/test/blog', function () {
    return view('blog');
});
Route::get('/test/lapa', function () {
    return view('lapa');
});


