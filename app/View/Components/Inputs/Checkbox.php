<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Checkbox extends Component
{
    public $value;
    public $checked;
    public $name;
    public $onchange;   
    public $required;
    public $maintext;
    public $class;
    public $id;
    public $extratext;

    public function __construct($value = '', $name = '', $id = 0, $checked = false, $onchange = '', $required = false, $maintext = false, $tooltip = "", $class="", $extratext = false){

        $this->value = $value;
        $this->name = $name;
        $this->checked = $checked;
        $this->onchange = $onchange;
        $this->required = $required;
        $this->maintext = $maintext;
        $this->extratext = $extratext;
        $this->id = $id;

        $class = explode(' ', $class);
        foreach ($class as &$class_item){
            $class_item = 'btn-'.$class_item;
        }

        $this->class = implode(' ', $class);
    }

    public function render(){
        return view('components.inputs.checkbox');
    }
}
