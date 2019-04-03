<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Masivo extends Mailable
{
    use Queueable, SerializesModels;

    public $mensaje;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {   
        $this->mensaje=$request->cuerpo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.envioCorreo')->subject('Datos para el torneo');
    }
}
