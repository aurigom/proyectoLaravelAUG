<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaControllerAurigom extends Controller
{
	//
    public function index()
{
    return 'Listado de películas';
}

public function cartelera()
{
    return 'Películas disponibles en cartelera';
}

public function contacto()
{
    return 'Contacto del videoclub';
}
}
