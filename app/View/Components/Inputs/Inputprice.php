<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Inputprice extends Component
{
    public $placeholder1;
    public $placeholder2;
    public $type;
    public $class;
    public $required;
    public $label;
    public $name;
    public $checkbox;
    public $checked;
    public $priceFrom;
    public $priceTo;

    public function __construct($placeholder1 = "", $placeholder2 = "", $type = "text", $class="default", $required = false, $label = '', $name = '', $checkbox = "", $checked = false, $priceFrom = '', $priceTo = ''){

        $this->placeholder1 = $placeholder1;
        $this->placeholder2 = $placeholder2;
        $this->type = $type;
        $this->class = $class;
        $this->required = $required;
        $this->label = $label;
        $this->name = $name;
        $this->checkbox = $checkbox;
        $this->checked = $checked;
        $this->priceFrom = $priceFrom;
        $this->priceTo = $priceTo;
    }

    public function render()
    {
        return view('components.inputs.inputprice');
    }
}
