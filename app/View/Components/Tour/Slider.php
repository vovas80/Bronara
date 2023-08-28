<?php

namespace App\View\Components\Tour;

use Illuminate\View\Component;

class Slider extends Component
{
    public $images; 
    public function __construct($images = [])
    {
       $this->images = $images;
    }

   
    public function render()
    {
        return view('components.tour.slider');
    }
}
