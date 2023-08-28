<?php

namespace App\View\Components\Exchange;

use Illuminate\View\Component;
use Single;

class Maintour extends Component
{
    public $isUserTours;
    public $isUserBooking;
    public $isUserDocument;
    public $tour;
    public $fields = [];
    public $active;
    public $booking;

    public function __construct($isUserTours = false, $isUserBooking = false, $isUserDocument = false, $tour = [], $active = false, $booking = [])
    {
        $this->isUserTours = $isUserTours;
        $this->isUserDocument = $isUserDocument;
        $this->isUserBooking = $isUserBooking;
        $this->tour = $tour;
        $this->active = $active;
        $this->booking = $booking;

        $s = new Single('Биржа туров', 10, 1);

        $page = new Single('Страница тура', 10, 1);

        $this->fields = [
            'buy'           => $s->field('Кнопки', 'Купить за', 'text', true, 'Купить за'),
            'chat'          => $s->field('Кнопки', 'Чат по туру', 'text', true, 'Чат по туру'),
            'more'          => $s->field('Кнопки', 'Подробнее о туре', 'text', true, 'Подробнее о туре'),
            'topicality'    => $s->field('Кнопки', 'Запросить актуальность', 'text', true, 'Запросить актуальность'),
            'book'          => $s->field('Кнопки', 'Забронировать тур', 'text', true, 'Забронировать тур'),
            'show_more'     => $s->field('Кнопки', 'Показать ещё туры', 'text', true, 'Показать ещё туры'),
            'abbr_people'   => $s->field('Aббревиатура', 'Взрослые', 'text', true, 'взр.'),
            'abbr_child'    => $s->field('Aббревиатура', 'Дети', 'text', true, 'дет.'),
            // 'people'        => $page->field('Общая информация', 'Взрослые', 'text', true, 'взр.'),
            // 'child'         => $page->field('Общая информация', 'Дети', 'text', true, 'реб.'),
            // 'visa'          => $page->field('Общая информация', 'Виза', 'text', true, 'Виза'),
            // 'route'         => $page->field('Общая информация', 'Маршрут', 'text', true, 'Маршрут'),
            // 'dates'         => $page->field('Общая информация', 'Даты', 'text', true, 'Даты'),
            // 'tourists'      => $page->field('Общая информация', 'Туристы', 'text', true, 'Туристы'),
            // 'room'          => $page->field('Общая информация', 'Номер и питание', 'text', true, 'Номер и питание'),
            'to'        => $page->field('Общая информация', 'Туда', 'text', true, 'Туда'),
            'from'      => $page->field('Общая информация', 'Назад', 'text', true, 'Назад'),
        ];


        
    }

    public function render()
    {
        return view('components.exchange.maintour');
    }
}
