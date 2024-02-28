<?php

namespace App\Events;

use App\Models\Film;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class FilmUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $film;

    /**
     * Create a new event instance.
     */
    public function __construct(Film $film)
    {
        $this->film = $film;
    }

   
  
}
