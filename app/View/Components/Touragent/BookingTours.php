<?php

namespace App\View\Components\Touragent;

use Illuminate\View\Component;

class BookingTours extends Component
{
    public $isSold;
    public $booking;

    public function __construct($booking = [], $isSold = false)
    {

        $this->booking = $booking;
        $this->isSold = $isSold;

    }

    public function render()
    {
        return view('components.touragent.booking-tours', [
            'booking'  => $this->booking, 
            'isSold'  => $this->isSold, 
        ])->render();
    }
}
