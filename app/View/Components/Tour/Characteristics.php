<?php

namespace App\View\Components\Tour;

use Illuminate\View\Component;

class Characteristics extends Component
{
    public $characteristics;

    public function __construct($characteristics = [])
    {
        $this->characteristics = $characteristics;
    }

    public function render()
    {
        return view('components.tour.characteristics');
    }
}
