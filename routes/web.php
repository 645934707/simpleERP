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

//用户管理
Route::get('/user/list', 'UserController@userList')->name('userList');
Route::get('/user/addUser', 'UserController@addUser')->name('addUser');
Route::post('doAddUser', 'UserController@doAddUser')->name('doAddUser');

//分类
Route::get('/brand/brandList', 'BrandController@brandList')->name('brandList');
Route::get('/brand/addBrand', 'BrandController@addBrand')->name('addBrand');
Route::get('/getBrands', 'BrandController@getBrands')->name('getBrands');
Route::post('/doAddBrand', 'BrandController@doAddBrand')->name('doAddBrand');