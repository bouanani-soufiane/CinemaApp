<?php

namespace App\Mail;

use App\Models\Film;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Mail\Mailable as MailMailable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FilmUpdated extends Mailable 
{
    use Queueable, SerializesModels;

    public $film;
    
    


    /**
     * Create a new message instance.
     */
    public function __construct(Film $film)
    {
        $this->film = $film;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Film Updated',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content()
    {
        return $this->markdown('mail.film-updated')->with(['film' => $this->film]);
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
