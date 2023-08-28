<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;
use App\Models\Years;

class People extends Component
{
    public $placeholder;
    public $type;
    public $class;
    public $required;
    public $label;
    public $name;
    public $items;
    public $checkbox;

    public $years;

    public function __construct($placeholder = "", $type = "text", $class="default", $required = false, $label = '', $name = '', $checkbox = '', $items = []){

        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->class = $class;
        $this->required = $required;
        $this->label = $label;
        $this->name = $name;
        $this->checkbox = $checkbox;

        $this->items = $items;

        $years_model = new Years();
        $years = $years_model->get_years();

        $this->years = [];
        foreach ($years as $elem) {
            $this->years[] = [
                'title' => $elem->title,
                'value' => $elem->title,
            ];
        }

    }

    public function render()
    {
        return view('components.inputs.people');
    }
}
