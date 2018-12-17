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

Route::get('/', 'sign@options');
Route::get('/signIn', function () {
})->name('signIn');
Route::get('/newUser', function () {
})->name('newUser');
Route::get('/sign', 'sign@signingIn');
Route::get('/homepage', 'attractions@display');



