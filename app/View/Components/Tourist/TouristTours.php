<?php

namespace App\View\Components\Tourist;

use Illuminate\View\Component;

class TouristTours extends Component
{
    public $tourist;
    public $tours;
    public $activecountry;

    public function __construct($tourist = [], $tours = [], $activecountry = '')
    {
        $this->tourist = $tourist;
        $this->tours = $tours;
        $this->activecountry = $activecountry;

    }

    public function render()
    {
        return view('components.tourist.tourist-tours');
    }
}
