<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Inputuser extends Component
{
    public $placeholder;
    public $type;
    public $class;
    public $label;
    public $name;
    public $readonly;
    public $value;
    public $isIcon;
    public $textarea;

    public function __construct($placeholder = "", $type = "text", $class="", $label = '', $name = '', $readonly = '', $value = '', $isIcon = false, $textarea = false){

        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->class = $class;
        $this->label = $label;
        $this->name = $name;
        $this->readonly = $readonly;
        $this->value = $value;
        $this->isIcon = $isIcon;
        $this->textarea = $textarea;

    }

    public function render()
    {
        return view('components.inputs.inputuser');
    }
}
