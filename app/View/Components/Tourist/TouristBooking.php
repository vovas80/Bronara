<?php

namespace App\View\Components\Tourist;

use Illuminate\View\Component;

class TouristBooking extends Component
{
    public $booking;

    public function __construct($booking = [])
    {
        $this->booking = $booking;
    }

    public function render()
    {
        return view('components.tourist.tourist-booking');
    }
}
