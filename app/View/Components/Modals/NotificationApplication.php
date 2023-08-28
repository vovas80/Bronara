<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;
use Single;

class NotificationApplication extends Component
{
    public $fields;

    public function __construct()
    {
        $s = new Single('Сообщение', 10, 3);

        $this->fields = [
            'title'   => $s->field('Сообщение для заявок', 'Вы не можете создать больше 3 заявок', 'text', true, 'Вы не можете создать больше 3 заявок'),
            'btn'     => $s->field('Сообщение для заявок', 'Понятно', 'text', true, 'Понятно'),
        ];
    }

    public function render()
    {
        return view('components.modals.notification-application');
    }
}
