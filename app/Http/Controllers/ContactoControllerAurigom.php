<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ConsultaRecibidaAurigom;
use Illuminate\Support\Facades\Mail;

class ContactoControllerAurigom extends Controller
{
    public function create()
    {
        return view('contacto');
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|min:3|max:255',
            'email' => 'required|email',
            'asunto' => 'required|string|max:255',
            'mensaje' => 'required|string',
        ]);

        Mail::to('admin@examplealias.com')->send(
            new ConsultaRecibidaAurigom(
                $datos['nombre'],
                $datos['email'],
                $datos['asunto'],
                $datos['mensaje']
            )
        );

        return back()->with('success', 'Tu consulta se ha enviado correctamente.');
    }
}
