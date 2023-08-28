<?php

namespace App\View\Components\Touragent;

use Illuminate\View\Component;
use App\Models\Visa;

class BookingTour extends Component
{ 
    public $isSold;
    public $tour;
    public $date;
    public $tourist;
    public $id;
    public $document;
    public $visa;

    public function __construct($isSold = false, $tour = [], $date = '', $tourist = [], $id = 0, $document = [], $visa = [])
    {
        $this->isSold = $isSold;
        $this->tour = $tour;
        $this->date = $date;
        $this->tourist = $tourist;
        $this->id = $id;
        $this->document = $document;

        $this->visa = Visa::get()->sortByDesc('id');

    } 
    
    public function render()
    {
        return view('components.touragent.booking-tour');
    }
}
