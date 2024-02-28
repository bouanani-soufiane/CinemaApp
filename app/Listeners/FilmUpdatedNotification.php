<?php

namespace App\Listeners;

use App\Events\FilmUpdated as FilmUpdateEvent;
use App\Mail\FilmUpdated as MailFilmUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class FilmUpdatedNotification
{

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     */
    public function handle(FilmUpdateEvent $event)
    {
        
        return Mail::to('chag.med.amine@gmail.com')->send(new MailFilmUpdated($event->film));
    }
}
