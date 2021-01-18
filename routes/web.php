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
    return view('welcome');
});

Auth::routes();

//"create new post" page
Route::get('/p/create', 'PostsController@create');
//store the post in DB
Route::post('/p', 'PostsController@store');

Route::get('/profile/{user}', 'ProfilesController2@index')->name('profile.show');
