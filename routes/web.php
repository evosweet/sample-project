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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'PagesController@index');

//test route
Route::get('test', 'TestController@index');

Route::get('widget/create', 'WidgetController@create')->name('widget.create');
Route::get('widget/{id}-{slug?}', 'WidgetController@show')->name('widget.show');
Route::resource('widget', 'WidgetController', ['except'=>['show','create']]);
