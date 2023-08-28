<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class InputForm extends Component
{
    
    public $placeholder;
    public $type;
    public $class;
    public $required;
    public $label;
    public $name;
    public $items;
    public $checkbox;
    public $textarea;

    public function __construct($placeholder = "", $type = "text", $class="default", $required = false, $label = '', $name = '', $checkbox = '', $items = [], $textarea = false){

        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->class = $class;
        $this->required = $required;
        $this->label = $label;
        $this->name = $name;
        $this->checkbox = $checkbox;

        $this->items = $items;
        $this->textarea = $textarea;

    }

    public function render()
    {
        return view('components.inputs.input-form');
    }
}
