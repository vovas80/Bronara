<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Input extends Component
{
    public $placeholder;
    public $type;
    public $class;
    public $textarea;
    public $required;
    public $label;
    public $name;
    public $star;
    public $value;

    public function __construct($placeholder = "", $type = "text", $class="default", $textarea = false, $required = false, $label = '', $name = '', $star = false, $value = ""){

        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->class = $class;
        $this->textarea = $textarea;
        $this->required = $required;
        $this->label = $label;
        $this->name = $name;
        $this->star = $star;
        $this->value = $value;

    }

    public function render(){
        
        return view('components.inputs.input');
    }
}
