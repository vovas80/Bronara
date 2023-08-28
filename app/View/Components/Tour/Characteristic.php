<?php

namespace App\View\Components\Tour;

use Illuminate\View\Component;

class Characteristic extends Component
{
    public $characteristic;

    public function __construct($characteristic = [])
    {
        $this->characteristic = $characteristic;
    }

    public function render()
    {
        return view('components.tour.characteristic');
    }
}
