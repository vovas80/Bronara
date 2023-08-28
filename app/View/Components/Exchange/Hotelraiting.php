<?php

namespace App\View\Components\Exchange;

use Illuminate\View\Component;
use Single;

class Hotelraiting extends Component
{
    public $fields = [];
    public $hotelraiting;

    public function __construct($hotelraiting = 0)
    {
        $this->hotelraiting = $hotelraiting;
        
        $s = new Single('Биржа туров', 10, 1);

        $this->fields = [
            'title' => $s->field('Информация', 'Рейтинг отеля', 'text', true, 'Рейтинг отеля'),
        ];

    }

    public function render()
    {
        return view('components.exchange.hotelraiting');
    }
}
