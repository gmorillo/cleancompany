<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FormularioContacto extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $telefono;
    public $email;
    public $mensaje;
    public function __construct($nombre, $telefono, $email, $mensaje)
    {
       $this->nombre = $nombre;
       $this->telefono = $telefono;
       $this->email = $email;
       $this->mensaje = $mensaje;
    }

    public function build()
    {
        return $this->view('emails.formulario-contacto')
            ->from('infoweb@logicsh.es', "Formulario Web Navalimp")
            ->subject("[LSH] " . $this->nombre . " Completo formulario de contacto del sitio web");
    }
}

class acuseRecibo extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $telefono;
    public $email;
    public $mensaje;
    public function __construct($nombre, $telefono, $email, $mensaje)
    {
       $this->nombre = $nombre;
       $this->telefono = $telefono;
       $this->email = $email;
       $this->mensaje = $mensaje;
    }

    public function build()
    {
        return $this->view('emails.formulario-contacto')
            ->from('infoweb@logicsh.es', "Navalimp Servicios Generales, S.L")
            ->subject("[LSH] " . $this->nombre . ", Has completado nuestro formulario de contacto.");
    }
}