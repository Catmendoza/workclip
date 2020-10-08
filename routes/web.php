<?php

use Illuminate\Support\Facades\Route;
use App\Producto;
//use App\Proyecto;

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
    $producto = Producto::All();
    //$proyecto = Proyecto::All();
    return view("main",["productos"=>$producto]);
    //return view("main",["productos"=>$producto,"proyectos"=>$proyecto]);
    
});
//->middleware(("auth"))
Route::get('/user',function(){
    return view('user');
});

Route::resource('/usuario', 'UserController');
Route::resource('/producto', 'ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
