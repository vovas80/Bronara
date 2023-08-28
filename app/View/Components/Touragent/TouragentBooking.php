<?php

namespace App\View\Components\Touragent;

use Illuminate\View\Component;

class TouragentBooking extends Component
{
    public $booking;

    public function __construct($booking = [])
    {
        $this->booking = $booking;
    }

    public function render()
    {
        return view('components.touragent.touragent-booking');
    }
}
