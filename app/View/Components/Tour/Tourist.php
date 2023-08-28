<?php

namespace App\View\Components\Tour;

use Illuminate\View\Component;

class Tourist extends Component
{
    public $tourist;

    public function __construct($tourist = [])
    {
        $this->tourist = $tourist;
    }
    
    public function render()
    {
        return view('components.tour.tourist');
    }
}
