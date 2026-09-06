<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    
});

Route::view('/admin', '/administradores');
Route::view('/clnt', '/clientes');
Route::view('/home', '/home');
Route::view('/layout', '/layout/app');
Route::view('/catalogo', '/catalogo/empleos');

Route::get('/', function () { return view('layout'); });
Route::get('/categorias', function () { return view('categorias.index'); })->name('categorias.index');
Route::get('/categorias/crear', function () { return view('categorias.create'); })->name('categorias.create');
Route::get('/ofertas', function () { return view('ofertas.index'); })->name('ofertas.index');
Route::get('/ofertas/crear', function () { return view('ofertas.create'); })->name('ofertas.create');
Route::get('/roles', function () { return view('roles.index'); })->name('roles.index');
Route::get('/roles/crear', function () { return view('roles.create'); })->name('roles.create');
Route::get('/usuarios', function () { return view('usuarios.index'); })->name('usuarios.index');
Route::get('/usuarios/crear', function () { return view('usuarios.create'); })->name('usuarios.create');
Route::get('/perfiles', function () { return view('perfiles.index'); })->name('perfiles.index');
Route::get('/perfiles/crear', function () { return view('perfiles.create'); })->name('perfiles.create');
Route::get('/postulaciones', function () { return view('postulaciones.index'); })->name('postulaciones.index');
Route::get('/postulaciones/crear', function () { return view('postulaciones.create'); })->name('postulaciones.create');
