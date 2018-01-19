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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/list', 'UserController@userList')->name('userList');
Route::get('/user/addUser', 'UserController@addUser')->name('addUser');
Route::post('doAddUser', 'UserController@doAddUser')->name('doAddUser');

Route::get('/brand/brandList', 'BrandController@brandList')->name('brandList');
