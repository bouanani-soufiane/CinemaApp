<?php

namespace App\Listeners;

use App\Events\SeatBookedEvent;
use App\Services\ToggleSeatStatusService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ToggleSeatStatusListener
{
    /**
     * Create the event listener.
     */
    public function __construct(public ToggleSeatStatusService  $toggleSeatStatusService )
    {

    }

    /**
     * Handle the event.
     */
    public function handle(SeatBookedEvent $event): void
    {
        $this->toggleSeatStatusService->updateSeatStatus($event->reservation);

    }
}
