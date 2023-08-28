<?php

namespace App\View\Components\Tourist;

use Illuminate\View\Component;
use Single;

class TouristApplication extends Component
{
    public $tourist;
    public $fields;
    public $applications;

    public function __construct($tourist = [], $applications = [])
    {
        $this->tourist = $tourist;
        $this->applications = $applications;

        $s = new Single('ЛК турист', 10, 1);

        $this->fields = [
            'title'         => $s->field('Заявки на туры', 'Подберите свой идеальный тур', 'text', true, 'Подберите свой идеальный тур'),
            'application'   => $s->field('Заявки на туры', 'Созданные заявки', 'text', true, 'Созданные заявки'),
        ];
    }

  
    public function render()
    {
        return view('components.tourist.tourist-application');
    }
}
