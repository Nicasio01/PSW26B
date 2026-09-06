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