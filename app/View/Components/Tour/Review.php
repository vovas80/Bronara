<?php

namespace App\View\Components\Tour;

use Illuminate\View\Component;

class Review extends Component
{
    public $review; 
    public $active;

    public function __construct($review = [], $active = false)
    {
        $this->review = $review;
        $this->active = $active;
    } 

    public function render()
    {
        return view('components.tour.review');
    }
}
