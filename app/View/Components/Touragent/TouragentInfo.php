<?php

namespace App\View\Components\Touragent;

use Illuminate\View\Component;
use Single;

class TouragentInfo extends Component
{
    public $fields;
    public $touragent;

    public function __construct($touragent = [])
    {
        $this->touragent = $touragent;

        $s = new Single('ЛК турагент', 9, 1);

        $this->fields = [
            'title'     => $s->field('Информация', 'Ваше имя:', 'text', true, 'Ваше имя:'),
            'phone'     => $s->field('Информация', 'Номер телефона:', 'text', true, 'Номер телефона:'),
            'email'     => $s->field('Информация', 'Ваш e-mail:', 'text', true, 'Ваш e-mail:'),
            'mark'      => $s->field('Информация', 'Ваш рейтинг:', 'text', true, 'Ваш рейтинг:'),
            'company'   => $s->field('Информация', 'Название турагенства:', 'text', true, 'Название турагенства:'),
            'address'   => $s->field('Информация', 'Ваш адрес:', 'text', true, 'Ваш адрес:'),
            'work'      => $s->field('Информация', 'График работы:', 'text', true, 'График работы:'),
            'license'   => $s->field('Информация', 'Номер лицензии:', 'text', true, 'Номер лицензии:'),
            'btn'       => $s->field('Информация', 'Сохранить изминения', 'text', true, 'Сохранить изминения'),
            'success'   => $s->field('Информация', 'Успешно', 'text', true, 'Изменения сохранены!'),
            'error'     => $s->field('Информация', 'Ошибка', 'text', true, 'Ошибка! Проверьте введенные данные!'),
            'id'        => $s->field('Информация', 'ID-номер:', 'text', true, 'ID-номер:'),
            'photo'     => $s->field('Информация', 'Загрузить фото', 'text', true, 'Загрузить фото'),


            'subscribe'         => $s->field('Подписка', 'Подписка на доступ', 'text', true, 'Подписка на доступ'),
            'subscribe_text'    => $s->field('Подписка', 'Купите доступ', 'textarea', true, 'Купите доступ, чтобы иметь возможность отвечать на заявки туристов'),
            'subscribe_text2'   => $s->field('Подписка', 'До истичения осталось:', 'text', true, 'До истичения подписки осталось:'),
            'subscribe_btn'     => $s->field('Подписка', 'Кнопка', 'text', true, 'Оплатить доступ'),

            'document_title' => $s->field('Документы', 'Документы', 'text', true, 'Документы'),
            'document_photo' => $s->field('Документы', 'Добавить фото', 'text', true, 'Добавить фото'),
            'document_text'  => $s->field('Документы', 'Загрузите фото следующих документов: сертификат-лицензия турагентства', 'textarea', true, 'Загрузите фото следующих документов: сертификат-лицензия турагентства'),
       
        ];
    }

    public function render()
    {
        return view('components.touragent.touragent-info');
    }
}
