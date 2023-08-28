<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;
use Single;

class Login extends Component
{
    public $fields;

    public function __construct()
    {

        $s = new Single('Модальные окна (логин)', 10, 3);

        $this->fields = [
            'title'                     => $s->field('Войти', 'Заголовок', 'text', true, 'Вход в личный кабинет'),
            'login'                     => $s->field('Войти', 'Войти как', 'text', true, 'Войти как'),
            'tourist'                   => $s->field('Войти', 'Турист кнопка', 'text', true, 'Турист'),
            'touragent'                 => $s->field('Войти', 'Турагент кнопка', 'text', true, 'Турагент'),
            'remember'                  => $s->field('Войти', 'Запомнить', 'text', true, 'Запомнить'),
            'forgot'                    => $s->field('Войти', 'Забыли пароль?', 'text', true, 'Забыли пароль?'),   
            'error'                     => $s->field('Войти', 'Ошибка! Проверьте правильность введенных данных', 'text', true, 'Ошибка! Проверьте правильность введенных данных'),
            'regist_touragent'          => $s->field('Войти', 'Зарегистрироваться как турагент', 'text', true, 'Зарегистрироваться как турагент'),
            'regist_tourist'            => $s->field('Войти', 'Зарегистрироваться как турист', 'text', true, 'Зарегистрироваться как турист'),
            'autorization'              => $s->field('Войти', 'Или авторизироваться с помощью', 'text', true, 'Или авторизироваться с помощью'),


            'email_tourist_label'       => $s->field('Войти турист', 'Ваш e-mail:', 'text', true, 'Ваш e-mail:'),
            'email_tourist'             => $s->field('Войти турист', 'Введите ваш e-mail', 'text', true, 'Введите ваш e-mail'),
            'password_tourist_label'    => $s->field('Войти турист', 'Пароль', 'text', true, 'Пароль'),
            'password_tourist'          => $s->field('Войти турист', 'Введите ваш пароль', 'text', true, 'Введите ваш пароль'),

            'id_touragent_label'         => $s->field('Войти турагент', 'Ваш ID:', 'text', true, 'Ваш ID:'),
            'id_touragent'               => $s->field('Войти турагент', 'Введите ваш id', 'text', true, 'Введите ваш id'),
            'password_touragent_label'  => $s->field('Войти турагент', 'Пароль', 'text', true, 'Пароль'),
            'password_touragent'        => $s->field('Войти турагент', 'Введите ваш пароль', 'text', true, 'Введите ваш пароль'),

        ];

    }

    public function render()
    {
        return view('components.modals.login');
    }
}
