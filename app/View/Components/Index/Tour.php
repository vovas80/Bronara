<?php

namespace App\View\Components\Index;

use Illuminate\View\Component;
use Single;
use App\Region;

class Tour extends Component
{
    public $tour;
    public $fields = [];

    public function __construct($tour = []) 
    {
        $this->tour = $tour;

        $s = new Single('Тур', 7, 1);

        $this->fields = [
            'more'              => $s->field('Общие данные', 'Подробнее о туре', 'text', true, 'Подробнее о туре'),
            'relevance'         => $s->field('Общие данные', 'Запросить актуальность', 'text', true, 'Запросить актуальность'),
            'relevance_text'    => $s->field('Общие данные', 'Для запроса подтверждения актуальности тура сохраните его в избранное', 'textarea', true, 'Для запроса подтверждения актуальности тура сохраните его в избранное'),
        ];
    }

    public function render()
    {
        return view('components.index.tour');
    }
}
