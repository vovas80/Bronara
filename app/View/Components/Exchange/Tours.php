<?php

namespace App\View\Components\Exchange;

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
        return view('components.exchange.tours', [
            'tours' => $this->tours,
        ])->render();
    }
}
