<?php

namespace App\View\Components\Tour;

use Illuminate\View\Component;
use App\Models\BookingStatus as Status;

class BookingStatus extends Component
{
    public $statustour;
    public $statuses;
    public $slug;
    public $idbooking;

    public function __construct($statustour = [], $statuses = [], $slug = '', $idbooking = 0)
    {
        $this->statustour = $statustour;
        $this->slug = $slug;
        $this->idbooking = $idbooking;

        $statuses = Status::get();

        $this->statuses = [];

        foreach ($statuses as $status) {
            $this->statuses[] = [
                'title' => $status->title,
                'value' => $status->id,
            ];
        }
  
    }

   
    public function render()
    {
        return view('components.tour.booking-status', [
            'statustour' => $this->statustour, 
            'statuses'   => $this->statuses, 
            'slug'       => $this->slug, 
            'idbooking'  => $this->idbooking, 
        ])->render();
    }
}
