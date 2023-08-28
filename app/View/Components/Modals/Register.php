<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;
use Single;

class Register extends Component
{
    public $fields;

    public function __construct()
    {
        $s = new Single('Модальные окна (региcтрация)', 10, 3);

        $this->fields = [
            'title'                     => $s->field('Регистрация', 'Заголовок', 'text', true, 'Регистрация'),
            'tourist'                   => $s->field('Регистрация', 'Турист кнопка', 'text', true, 'Турист'),
            'touragent'                 => $s->field('Регистрация', 'Турагент кнопка', 'text', true, 'Турагент'),
            'remember'                  => $s->field('Регистрация', 'Запомнить', 'text', true, 'Запомнить'),
            'regist_touragent'          => $s->field('Регистрация', 'Зарегистрироваться как турагент', 'text', true, 'Зарегистрироваться как турагент'),
            'regist_touragent_title'    => $s->field('Регистрация', 'Зарегистрироваться как турист', 'text', true, 'Зарегистрироваться как турист'),
            'regist_tourist'            => $s->field('Регистрация', 'Вы регистрируетесь как турист!', 'text', true, 'Вы регистрируетесь как турист!'),
            'login_touragent'           => $s->field('Регистрация', 'Войти как турагент', 'text', true, 'Войти как турагент'),
            'login_tourist'             => $s->field('Регистрация', 'Войти как турист', 'text', true, 'Войти как турист'),
            'error'                     => $s->field('Регистрация', 'Ошибка', 'text', true, 'Ошибка'),

            'title_touragent'           => $s->field('Регистрация турагент', 'Заголовок турагент', 'text', true, 'Вы регистрируетесь как турагент!'),
            'title_touragention_label'  => $s->field('Регистрация турагент', 'Название Турагентства:', 'text', true, 'Название Турагентства:'),
            'title_touragention'        => $s->field('Регистрация турагент', 'Введите название', 'text', true, 'Введите название'),
            'name_touragent_label'      => $s->field('Регистрация турагент', 'Имя и фамилия менеджера:', 'text', true, 'Имя и фамилия менеджера:'),
            'name_touragent'            => $s->field('Регистрация турагент', 'Введите имя и фамилию', 'text', true, 'Введите имя и фамилию'),
            'email_touragent_label'     => $s->field('Регистрация турагент', 'E-mail:', 'text', true, 'E-mail:'),
            'email_touragent'           => $s->field('Регистрация турагент', 'Введите e-mail', 'text', true, 'Введите e-mail'),
            'phone_touragent_label'     => $s->field('Регистрация турагент', 'Номер телефона:', 'text', true, 'Номер телефона:'),
            'phone_touragent'           => $s->field('Регистрация турагент', '+38 (0ХХ) ХХХ - ХХ - ХХ', 'text', true, '+38 (0ХХ) ХХХ - ХХ - ХХ'),
            'password_touragent_label'  => $s->field('Регистрация турагент', 'Пароль', 'text', true, 'Пароль'),
            'password_touragent'        => $s->field('Регистрация турагент', 'Введите ваш пароль', 'text', true, 'Введите ваш пароль'),

            'title_tourist_label'       => $s->field('Регистрация турист', 'Ваше имя:', 'text', true, 'Ваше имя:'),
            'title_tourist'             => $s->field('Регистрация турист', 'Введите имя', 'text', true, 'Введите имя'),
            'email_tourist_label'       => $s->field('Регистрация турист', 'E-mail:', 'text', true, 'E-mail:'),
            'email_tourist'             => $s->field('Регистрация турист', 'Введите e-mail', 'text', true, 'Введите e-mail'),
            'phone_tourist_label'       => $s->field('Регистрация турист', 'Номер телефона:', 'text', true, 'Номер телефона:'),
            'phone_tourist'             => $s->field('Регистрация турист', '+38 (0ХХ) ХХХ - ХХ - ХХ', 'text', true, '+38 (0ХХ) ХХХ - ХХ - ХХ'),
            'password_tourist_label'    => $s->field('Регистрация турист', 'Пароль', 'text', true, 'Пароль'),
            'password_tourist'          => $s->field('Регистрация турист', 'Введите ваш пароль', 'text', true, 'Введите ваш пароль'),
        ];
    }

    public function render()
    {
        return view('components.modals.register');
    }
}
