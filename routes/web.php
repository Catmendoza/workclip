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



//->middleware(("auth"))
Route::get('/user',function(){
    return view('user');
});

Route::resource('/usuario', 'UserController');
Route::resource('/proyecto', 'ProyectoController');
Route::resource('/comentario', 'ComentarioController');
Route::resource('/producto','ProductoController');
Route::resource('/perfil','PerfilController');
Route::resource('/edit-habilidades','HabilidadesController');
Route::resource('/edit-hobbys','HobbyController');
Route::resource('/publicaciones','PublicacionController');
Route::resource('/empleo','EmpleoController');


Route::get('/perfiles','PerfilController@perfiles');
Route::post('/retornar','PublicacionController@retornar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/redirect/{provider}', 'GoogleLoginController@redirect');
Route::get('/callback/{provider}', 'GoogleLoginController@callback');