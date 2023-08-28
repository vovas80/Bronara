<?php

namespace App\View\Components\Tour;

use Illuminate\View\Component;

class Info extends Component
{
    public $tour;
        
    public function __construct($tour = [])
    {
        $this->tour = $tour;

    }

    
    public function render()
    {
        return view('components.tour.info');
    }
}
