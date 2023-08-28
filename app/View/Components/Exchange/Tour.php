<?php

namespace App\View\Components\Exchange;

use Illuminate\View\Component;
use Single;

class Tour extends Component
{
    public $tour;
    public $fields;
    public $active;

    public function __construct($tour = [], $active = false)
    {
        $this->tour = $tour;
        $this->active = $active;

        $s = new Single('Биржа туров', 10, 1);

        $this->fields = [
            'buy'           => $s->field('Кнопки', 'Купить за', 'text', true, 'Купить за'),
            'chat'          => $s->field('Кнопки', 'Чат по туру', 'text', true, 'Чат по туру'),
            'more'          => $s->field('Кнопки', 'Подробнее о туре', 'text', true, 'Подробнее о туре'),
            'topicality'    => $s->field('Кнопки', 'Запросить актуальность', 'text', true, 'Запросить актуальность'),
            'book'          => $s->field('Кнопки', 'Забронировать тур', 'text', true, 'Забронировать тур'),
            'show_more'     => $s->field('Кнопки', 'Показать ещё туры', 'text', true, 'Показать ещё туры'),
            'abbr_people'   => $s->field('Aббревиатура', 'Взрослые', 'text', true, 'взр.'),
            'abbr_child'    => $s->field('Aббревиатура', 'Дети', 'text', true, 'дет.'),
        ];
    }

    public function render()
    {
        return view('components.exchange.tour');
    }
}
