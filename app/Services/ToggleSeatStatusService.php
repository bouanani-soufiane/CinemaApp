<?php

namespace App\Services;

use App\Models\Reservation;
use App\Models\Seat;

/**
 * Class ToggleSeatStatusService.
 */
class ToggleSeatStatusService
{
    /**
     * @throws \Exception
     */
    public function updateSeatStatus(Reservation $reservation)
    {
        try{
            $reservation->seat()->update(['is_booked' => true]);
        }catch (\Exception $e){
            throw new \Exception();
        }
    }
}
