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


Route::get('/', 'HomeController@index');
Route::get('/about', 'AboutController@index');
Route::get('/story', 'StoryController@index');
Route::get('/family', 'FamilyController@index');
Route::get('/gallery', 'GalleryController@index');
Route::get('/wedding', 'WeddingController@index');
Route::get('/event', 'EventController@index');
Route::get('/contact', 'ContactController@index');
