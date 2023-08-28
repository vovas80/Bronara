<?php

namespace App\View\Components\Tour;

use Illuminate\View\Component;
use Single;


class Rating extends Component
{
    public $touragent;
    public $fields = [];

    public function __construct($touragent = [])
    {
        $this->touragent = $touragent;

        $s = new Single('Тур', 7, 1);

        $this->fields = [
            'rating'     => $s->field('Общие данные', 'Рейтинг:', 'text', true, 'Рейтинг:'),
        ];
    }

   
    public function render()
    {
        return view('components.tour.rating');
    }
}
