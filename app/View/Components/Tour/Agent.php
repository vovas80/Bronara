<?php

namespace App\View\Components\Tour;

use Illuminate\View\Component;

class Agent extends Component
{
    public $touragent;

    public function __construct($touragent = [])
    {
        $this->touragent = $touragent;
    }

    public function render()
    {
        return view('components.tour.agent');
    }
}
