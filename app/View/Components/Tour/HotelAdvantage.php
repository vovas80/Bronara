<?php

namespace App\View\Components\Tour;

use Illuminate\View\Component;

class HotelAdvantage extends Component
{
    public $advantage;

    public function __construct($advantage = [])
    {
        $this->advantage = $advantage;
    }

    public function render()
    {
        return view('components.tour.hotel-advantage');
    }
}
