<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;
use Single;

class TouragentTour extends Component
{
    public $tour;
    public $fields = [];
    public $active;

    public function __construct($tour = [], $active = false)
    {
       
        $this->active = true;
        $this->tour = $tour;

        $s = new Single('Страница тура', 10, 1);

        $this->fields = [
            'to'            => $s->field('Общая информация', 'Туда', 'text', true, 'Туда'),
            'from'          => $s->field('Общая информация', 'Назад', 'text', true, 'Назад'),
            'reviews_title' => $s->field('Отзывы', 'Отзывы', 'text', true, 'Отзывы'),
            'tripadvisor'   => $s->field('Отзывы', 'TripAdvisor', 'text', true, 'TripAdvisor'),
            'tophotels'     => $s->field('Отзывы', 'TopHotels', 'text', true, 'TopHotels'),
        ];

    }

   
    public function render()
    {
        return view('components.modals.touragent-tour', [
            'tour'       => $this->tour, 
            'fields'     => $this->fields,
            'active'     => true,
        ])->render();
    }
}
