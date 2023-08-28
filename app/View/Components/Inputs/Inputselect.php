<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Inputselect extends Component
{
    public $placeholder;
    public $type;
    public $class;
    public $required;
    public $label;
    public $name;
    public $items;
    public $checkbox;
    public $value;
    public $dataId;
    public $checked;

    public function __construct($placeholder = "", $type = "text", $class="default", $required = false, $label = '', $name = '', $checkbox = '', $items = [], $checked = false){

        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->class = $class;
        $this->required = $required;
        $this->label = $label;
        $this->name = $name;
        $this->checkbox = $checkbox;
        $this->checked = $checked;

        $this->items = $items;

        $this->value = '';
        $this->dataId = '';

        foreach ($items as $item) {
            if (isset($item['active']) && $item['active']) {
                $this->value = $item['title'];
                $this->dataId = $item['value'];
            }
        }

    }

    public function render(){
        
        return view('components.inputs.inputselect');
    }
}
