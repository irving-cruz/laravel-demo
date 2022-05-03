<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\mensajeRecibido;


class contactoController extends Controller
{
    public function store()
    {
        //return $request->get('name');
        $msg = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:5'
        ]);

        //Mail::to('juan@udem.edu')->send(new mensajeRecibido($msg));
        Mail::to('irving.cruz@udem.edu')->queue(new mensajeRecibido($msg));
        return new mensajeRecibido($msg);
        return 'Mensaje enviado';
    }
}
