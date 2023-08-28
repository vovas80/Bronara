<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;
use Single;

class Support extends Component
{
    public $fields;

    public function __construct()
    {
        $s = new Single('Поддержка', 10, 3);

        $this->fields = [
            'title'     => $s->field('Поддержка', 'Какой вопрос вас интересует', 'text', true, 'Какой вопрос вас интересует'),
            'btn'       => $s->field('Поддержка', 'Отправить', 'text', true, 'Отправить'),
            'success'   => $s->field('Поддержка', 'Спасибо, ваш запрос отправлен! Ожидайте ответа на почте', 'textarea', true, 'Спасибо, ваш запрос отправлен! Ожидайте ответа на почте'),
            'error'     => $s->field('Поддержка', 'Ошибка', 'textarea', true, 'Ошибка'),
            'comment'   => $s->field('Поддержка', 'Ваш комментарий', 'textarea', true, 'Ваш комментарий'),
            'label'     => $s->field('Поддержка', 'Опишите свою проблему или предложения, замечания:', 'text', true, 'Опишите свою проблему или предложения, замечания:'),
        ];
    }

    public function render()
    {
        return view('components.modals.support');
    }
}
