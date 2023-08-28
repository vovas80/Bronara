<?php

namespace App\View\Components\Tour;

use Illuminate\View\Component;

class Arrival extends Component
{
    public $cityfrom;
    public $cityto;
    public $dateto;
    public $datefrom;
    public $title;

    public function __construct($cityfrom = "", $cityto = '', $dateto = '', $datefrom = '', $title = '')
    {
        $this->cityfrom = $cityfrom;
        $this->cityto = $cityto;
        $this->dateto = $dateto;
        $this->datefrom = $datefrom;
        $this->title = $title;
    }

    public function render()
    {
        return view('components.tour.arrival');
    }
}
