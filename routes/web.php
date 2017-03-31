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

Route::get('/home', 'HomeController@index');

Route::get('/', ['as'=>'web.profile','uses'=>'WebProfileController@index']);

Route::post('/post_subscribe', ['as'=>'web.profile.post.subscribe', 'uses'=>'WebProfileController@post_subscribe']);

Route::post('/post_message', ['as'=>'web.profile.post.message', 'uses'=>'WebProfileController@post_message']);

