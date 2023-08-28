<?php

namespace App\View\Components\Tour;

use Illuminate\View\Component;

class Stars extends Component
{
    public $stars;
    public function __construct($stars = 1)
    {
        $this->stars = $stars;
    }

    public function render()
    {
        return view('components.tour.stars');
    }
}
