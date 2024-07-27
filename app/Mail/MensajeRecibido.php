<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MensajeRecibido extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $subject = 'Mensaje Recibido';
    public $mensaje;

    public function build()
    {
        return $this->view('emails.mensaje-recibido');
    }

    public function __construct($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mensaje Recibido',
        );
    }

    /**
     * Get the message content definition.
     */
    /*public function content(): Content
    {
        return new Content(
            view: 'emails.mensaje-recibido',
        );
    }*/

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    
}