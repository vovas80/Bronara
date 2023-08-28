<?php

namespace App\View\Components\Exchange;

use Illuminate\View\Component;

class Maintours extends Component
{
    public $isUserTours;
    public $isUserBooking;
    public $isUserDocument;
    public $tours;

    public function __construct($tours = [], $isUserTours = false, $isUserBooking = false, $isUserDocument = false)
    {
        $this->isUserTours = $isUserTours;
        $this->isUserDocument = $isUserDocument;
        $this->isUserBooking = $isUserBooking;
        $this->tours = $tours;
    }

  
    public function render()
    {
        return view('components.exchange.maintours', [
            'isUserTours'    => $this->isUserTours,
            'isUserBooking'  => $this->isUserBooking,
            'isUserDocument' => $this->isUserDocument,
            'tours'          => $this->tours, 
        ])->render();
    }
}
