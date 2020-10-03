<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});


Route::get('/main', function () {
    return view('main');
});
//->middleware(("auth"))
Route::get('/user',function(){
    return view('user');
});

Route::resource('/usuario', 'UserController');
Route::resource('/producto', 'ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
