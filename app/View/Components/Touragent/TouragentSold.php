<?php

namespace App\View\Components\Touragent;

use Illuminate\View\Component;

class TouragentSold extends Component
{
    public $booking;

    public function __construct($booking = [])
    {
        $this->booking = $booking;
    }
    
    public function render()
    {
        return view('components.touragent.touragent-sold');
    }
}
