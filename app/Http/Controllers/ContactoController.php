<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function store(){
        $mensaje = request()->validate([
            'nombre' => 'required',
            'email' => 'required',
            'asunto' => 'required',
            'mensaje' => 'required|min:3',
        ],[
            'nombre.required' => 'Ingresa tu NOMBRE',
            'email.required' => 'Ingresa tu CORREO',
            'asunto.required' => 'Ingresa tu ASUNTO',
            'mensaje.required' => 'Ingresa tu MENSAJE'
        ]);

        Mail::to('fjrodriguezv@unitru.edu.pe')->send(new MensajeRecibido ($mensaje));

        //return new MensajeRecibido($mensaje);

        //return 'Mensaje Enviado';

        return back()->with('estado','Gracias por ponerte en contacto, te responderemos a la brevedad posbile');
    }
}