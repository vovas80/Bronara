<?php

namespace App\View\Components\Tour;

use Illuminate\View\Component;
use Single;

class Favourite extends Component
{
    public $fields = [];
    public $id;
    public $saved;

    public function __construct($id = '', $saved = false)
    {
        $this->id = $id;
        $this->saved = $saved;
        
        $s = new Single('Тур', 7, 1);

        $this->fields = [
            'btn1'     => $s->field('Общие данные', 'Добавить тур в избранное:', 'text', true, 'Добавить тур в избранное:'),
            'btn2'     => $s->field('Общие данные', 'Тур добавлен в избранное', 'text', true, 'Тур добавлен в избранное'),
        ];
    }

    public function render()
    {
        return view('components.tour.favourite');
    }
}
