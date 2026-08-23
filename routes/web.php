<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    
});

Route::view('/admin', '/administradores');
Route::view('/clnt', '/clientes');
Route::view('/home', '/home');

