<?php

namespace App\View\Components\Tour;

use Illuminate\View\Component;
use Single; 

class Basicinfo extends Component
{
    public $isModalBookTour;
    public $tour;
    public $fields = [];

    public function __construct($isModalBookTour = false, $tour = [])
    {
        $this->isModalBookTour = $isModalBookTour;
        $this->tour = $tour;

        $s = new Single('Страница тура', 10, 1);

        $this->fields = [
            'people'        => $s->field('Общая информация', 'Взрослые', 'text', true, 'взр.'),
            'child'         => $s->field('Общая информация', 'Дети', 'text', true, 'реб.'),
            'visa'          => $s->field('Общая информация', 'Виза', 'text', true, 'Виза'),
            'route'         => $s->field('Общая информация', 'Маршрут', 'text', true, 'Маршрут'),
            'dates'         => $s->field('Общая информация', 'Даты', 'text', true, 'Даты'),
            'tourists'      => $s->field('Общая информация', 'Туристы', 'text', true, 'Туристы'),
            'room'          => $s->field('Общая информация', 'Номер и питание', 'text', true, 'Номер и питание'),
        ];
    }

    
    public function render()
    {
        return view('components.tour.basicinfo');
    }
}
