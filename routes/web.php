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

Route::get('/', 'GeneralController@general');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/visualizacion', 'GeneralController@mapa')->name('mapa');
Route::get('/general', 'GeneralController@general')->name('general');
Route::get('/contactos', 'GeneralController@contactos')->name('contactos');
Route::get('/usuarios', 'AdmController@index')->name('usuarios');
Route::get('/inicio', 'AdmController@inicio')->name('inicio');
Route::get('/contribuciones', 'AdmController@contribuciones')->name('contribuciones');
Route::get('/señalizaciones', 'AdmController@señalizaciones')->name('señalizaciones');
Route::get('/gestionar', 'AdmController@gestionarUsuario')->name('gestionar');
Route::get('/listarUsuarios', 'UserController@index')->name('listar');
Route::get('/registrarSeñal', 'AdmController@vistaRegistrarSeñal')->name('vRegistrarSeñal');
Route::post('/registrarSeñales', 'SeñalizacionController@create')->name('registrarSeñales');
Route::post('/modificarSeñal', 'SeñalizacionController@modificarSeñal')->name('modificarSeñal');
Route::post('/registrarUsuario', 'UserController@registrarUsu')->name('registrarUsu');
Route::get('/registrarUsuView', 'UserController@registrarView')->name('registarUsuView');
Route::get('/parametroSeñal/{id}','SeñalizacionController@vistaModificar')->name('parametroSeñal');
Route::get('/eliminarSenal/{id}','SeñalizacionController@eliminar')->name('eliminarSenal');
Route::get('/parametroUsu/{id}','UserController@vistaModificar')->name('parametroUsuario');
Route::post('/parametroModUsu/{id}','UserController@modificar')->name('modificarUsuario');
Route::get('/eliminarUsu/{id}','UserController@eliminar')->name('eliminarUsu');
Route::post('/verificarUsuario','UserController@verificarUser');