<?php

namespace App\View\Components\Tour;

use Illuminate\View\Component;

class TouragentTourInfo extends Component
{
    public $tour;
    public $idbooking;

    public function __construct($tour = [], $idbooking)
    {
        $this->tour = $tour;
        $this->idbooking = $idbooking;
    }

    public function render()
    {
        return view('components.tour.touragent-tour-info');
    }
}
