<?php

namespace App\View\Components\Tour;

use Illuminate\View\Component;

class Reviews extends Component
{
    public $reviews; 
    public $parser;

    public function __construct($reviews = [], $parser = '')
    {
        $this->reviews = $reviews;
        $this->parser = $parser;
    }

    public function render()
    {
        return view('components.tour.reviews');
    }
}
