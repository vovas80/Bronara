<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;
use Single;

class BookTour extends Component
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
        ];

    }
   
    public function render()
    {
        return view('components.modals.book-tour', [
            'tour'      => $this->tour, 
            'fields'    => $this->fields,
            'active'    => true,
        ])->render();
    }
}
