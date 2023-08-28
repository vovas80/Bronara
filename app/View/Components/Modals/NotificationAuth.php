<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;
use Single;

class NotificationAuth extends Component
{
    public $fields;

    public function __construct()
    {
        $s = new Single('Сообщение', 10, 3);

        $this->fields = [
            'title'   => $s->field('Сообщение для подбора тура', 'Зайдите или зарегистрируйтесь как турист', 'text', true, 'Зайдите или зарегистрируйтесь как турист'),
            'btn'     => $s->field('Сообщение для подбора тура', 'Понятно', 'text', true, 'Понятно'),
        ];
    }

    public function render()
    {
        return view('components.modals.notification-auth');
    }
}
