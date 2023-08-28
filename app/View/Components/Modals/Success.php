<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;
use Single;

class Success extends Component
{
    public $fields;

    public function __construct()
    {
        $s = new Single('Сообщение', 10, 3);

        $this->fields = [
            'title'   => $s->field('Сообщение', 'Тур успешно забронирован', 'text', true, 'Тур успешно забронирован'),
            'btn'     => $s->field('Сообщение', 'В мои туры', 'text', true, 'В мои туры'),
        ];
    }

    public function render()
    {
        return view('components.modals.success');
    }
}
