<?php

namespace App\View\Components\Tourist;

use Illuminate\View\Component;
use Single;

class Touristinfo extends Component
{
    
    public $fields;
    public $tourist;

    public function __construct($tourist = [])
    {
        $this->tourist = $tourist;

        $s = new Single('ЛК турист', 10, 1);

        $this->fields = [
            'title'     => $s->field('Информация', 'Ваше имя:', 'text', true, 'Ваше имя:'),
            'phone'     => $s->field('Информация', 'Номер телефона:', 'text', true, 'Номер телефона:'),
            'email'     => $s->field('Информация', 'Ваш e-mail:', 'text', true, 'Ваш e-mail:'),
            'mark'      => $s->field('Информация', 'Ваш рейтинг:', 'text', true, 'Ваш рейтинг:'),
            'btn'       => $s->field('Информация', 'Сохранить изминения', 'text', true, 'Сохранить изминения'),
            'success'   => $s->field('Информация', 'Успешно', 'text', true, 'Изменения сохранены!'),
            'error'     => $s->field('Информация', 'Ошибка', 'text', true, 'Ошибка! Проверьте введенные данные!'),
        ];
    }

    public function render()
    {
        return view('components.tourist.touristinfo');
    }
}
