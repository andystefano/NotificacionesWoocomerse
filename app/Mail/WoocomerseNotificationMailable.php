<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WoocomerseNotificationMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $subjet = "unset";
    public $name = "andyyyy";
    public $date = "null";



    public function __construct($nombre)
    {
        //
        $this->date = date("Y-m-d");
        $this->name = $nombre;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Woocomerse Notification Mailable',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        /*
        return new Content(
            view: 'emails.testEnvio',
        );  */

    
        return new Content(
            view: 'emails.testEnvio'
        );
        

    //$this->data['contenido']
        
        

/*
        return new Content(
            view('emails.testEnvio')
                ->with('name', $this->name)
                ->with('subjet', $this->subjet)
                ->with('date', $this->date)
            ); */

    }

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
