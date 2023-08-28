<?php

namespace App\View\Components\Index;

use Illuminate\View\Component;
use Single;

class Work extends Component
{
    public $fields = [];
    public function __construct()
    {
        $s = new Single('Как это работает', 9, 2);

        $title = $s->field('Как это работает', 'Заголовок', 'text', true, 'Как это работает');


        $steps = $s->field('Шаги', 'Шаг', 'repeat', true);
        $steps_items = [];
        foreach ($steps as $elm){
            $steps_items [] = [
                $elm->field('Шаг №', 'text', ''), 
                $elm->field('Картинка', 'photo', ''), 
                $elm->field('Текст', 'text', ''), 
            ];
            $elm->end();
        }

        $this->fields = [
            'steps'   => $steps_items,
            'title'   => $title,
        ];
    }

    public function render()
    {
        return view('components.index.work');
    }
}
