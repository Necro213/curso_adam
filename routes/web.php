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


Route::get('/','ViewsController@viewHome')->name('inicio');
Route::get('/crear','ViewsController@crearT')->name('crearT');
Route::post('/new','ViewsController@nuevaT')->name('new');
Route::get('/edit/{id}/','ViewsController@editarT')->name('editar');
Route::post('/update/{id}','ViewsController@actualizarT')->name('actualizar');
Route::delete('/delete/{id}','ViewsController@eliminarT')->name('eliminar');

Route::get('/tareas','ViewsController@viewTareas')->name('inicio');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 seccion perfil
 */

Route::get('/perfil','PerfilController@viewHome')->name('perfil');