<?php

use Illuminate\Support\Facades\Route;
use App\Producto;

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
Route::resource('/usuario', 'UserController');
Route::resource('/producto', 'ProductController');

Route::resource('/empleo', 'EmpleoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
