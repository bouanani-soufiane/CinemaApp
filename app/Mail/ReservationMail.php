<?php

namespace App\Mail;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class ReservationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject ;
    public $body ;
    public $reservations;
    /**
     * Create a new message instance.
     */
    public function __construct($subject , $body , $reservations)
    {
        $this->subject = $subject;
        $this->body = $body;
        $this->user = Auth::user();
        $this->reservations = $reservations;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Reservation Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
        return $this->subject($this->subject)
            ->view('email')
            ->with([
                'body' => $this->body,
                'user' => $this->user,
                'reservations' => $this->reservations
            ]);
   }
}
