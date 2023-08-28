<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;
use Single;

class Notification extends Component
{
    public $fields;

    public function __construct()
    {
        $s = new Single('Сообщение', 10, 3);

        $this->fields = [
            'title'   => $s->field('Сообщение', 'Вы можете выбрать максимум 3 отеля', 'text', true, 'Вы можете выбрать максимум 3 отеля'),
            'btn'     => $s->field('Сообщение', 'Понятно', 'text', true, 'Понятно'),
        ];
    }

    public function render()
    {
        return view('components.modals.notification');
    }
}
