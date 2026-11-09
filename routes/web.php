<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaControllerAurigom;
use App\Http\Controllers\ClienteControllerAurigom;
use App\Http\Controllers\AlquilerControllerAurigom;
use App\Http\Controllers\ContactoControllerAurigom;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/peliculas', [PeliculaControllerAurigom::class, 'index']);
Route::get('/cartelera', [PeliculaControllerAurigom::class, 'cartelera']);
Route::get('/contacto', [PeliculaControllerAurigom::class, 'contacto']);
Route::resource('clientes', ClienteControllerAurigom::class);
Route::resource('alquileres', AlquilerControllerAurigom::class);
Route::get('/contacto', [ContactoControllerAurigom::class, 'create']);
Route::post('/contacto', [ContactoControllerAurigom::class, 'store']);
