<?php

namespace App\View\Components\Index;

use Illuminate\View\Component;

class Tours extends Component
{
    public $tours;

    public function __construct($tours = [])
    {
        $this->tours = $tours;
    }

    
    public function render()
    {
        return view('components.index.tours');
    }
}
