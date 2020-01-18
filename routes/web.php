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
// Route::get("/","PofsController@index");
// Route::get("top-nav","PofsController@topnav");
// Route::get("calendar_view","PofsController@calendar");
// Route::get("user_add_form","UserController@user_add_view");
// Route::post("user_add","UserController@user_add")
// 	->middleware("user");
//  Route::get("login_in","SessionController@login");
//  Route::any("do_login","SessionController@do_login");
//  Route::get("logout","SessionController@logout");
Route::resource('posts','PostController');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
