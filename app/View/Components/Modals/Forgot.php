<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;
use Single;

class Forgot extends Component
{
    public $fields;

    public function __construct()
    {
        $s = new Single('Модальные окна (забыли пароль)', 10, 3);

        $this->fields = [
            'title'                 => $s->field('Забыли пароль', 'Заголовок', 'text', true, 'Забыли пароль?'),
            
            'form_1_text'           => $s->field('Забыли пароль', 'Пожалуйста, введите свой e-mail', 'text', true, 'Пожалуйста, введите свой e-mail'),
            'form_1_input'          => $s->field('Забыли пароль', 'E-mail', 'text', true, 'E-mail'),
            'form_1_placeholder'    => $s->field('Забыли пароль', 'Введите e-mail', 'text', true, 'Введите e-mail'),
            'form_1_button_text'    => $s->field('Забыли пароль', 'Текст кнопки #1', 'text', true, 'Отправить'),
            'form_1_error'          => $s->field('Забыли пароль', 'E-mail не существует', 'text', true, 'E-mail не существует, зарегестрируйтесь'),

            'form_2_description'    => $s->field('Забыли пароль', 'Введите код из полученного смс', 'textarea', true, 'Введите код из полученного смс'),
            'form_email'            => $s->field('Забыли пароль', 'Ваш код', 'textarea', true, 'Ваш код'),
            'form_email_header'     => $s->field('Забыли пароль', 'Сброс пароля', 'textarea', true, 'Сброс пароля'),
            'form_2_input'          => $s->field('Забыли пароль', 'Код', 'text', true, 'Код'),
            'form_2_placeholder'    => $s->field('Забыли пароль', 'Введите код', 'text', true, 'Введите код'),
            'form_2_button_text'    => $s->field('Забыли пароль', 'Текст кнопки #2', 'text', true, 'Отправить'),
            'form_2_error'          => $s->field('Забыли пароль', 'Неправильный код', 'text', true, 'Неправильный код'),
            
            'form_3_text'           => $s->field('Забыли пароль', 'Введите новый пароль', 'text', true, 'Введите новый пароль'),
            'form_3_input_1'        => $s->field('Забыли пароль', 'Пароль', 'text', true, 'Пароль'),
            'form_3_input_2'        => $s->field('Забыли пароль', 'Повторите пароль', 'text', true, 'Повторите пароль'),
            'form_3_button_text'    => $s->field('Забыли пароль', 'Текст кнопки #3', 'text', true, 'Отправить'),
            'form_3_error'          => $s->field('Забыли пароль', 'Пароли не совадают', 'text', true, 'Пароли не совадают'),

            'form_last'             => $s->field('Забыли пароль', 'Вернуться назад', 'text', true, 'Вернуться назад'),
        ];
    }

    
    public function render()
    {
        return view('components.modals.forgot');
    }
}
