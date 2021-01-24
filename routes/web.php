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



Auth::routes();

//Order is important

//Post
Route::get('/', 'PostsController@index');
Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');
Route::get('/p/{post}', 'PostsController@show');
Route::get('/p/delete/{post_id}', [
    'uses' => 'PostsController@delete',
    'as' => 'post.delete',
    'middleware' => 'auth']);

//Follow
Route::post('follow/{user}', 'FollowsController@store');


//profile
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
Route::post('/delete/{user}','ProfilesController@delete')->name('profile.delete');

//SearchBox
Route::get('/autocomplete', 'SearchController@index')->name('autocomplete.index');

