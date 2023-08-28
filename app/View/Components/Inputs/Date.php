<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Date extends Component
{
    public $placeholder;
    public $label;
    public $class;
    public $checkbox;
    public $noperiod;
    public $required;
    public $dateFrom;
    public $dateTo;
    public $checked;

    public function __construct($placeholder = '', $noperiod = false, $label = '', $class = '', $checkbox = '', $required = false, $dateFrom = '', $dateTo = '', $checked = false)
    {
        $this->placeholder = $placeholder;
        $this->label = $label;
        $this->class = $class;
        $this->checkbox = $checkbox;
        $this->noperiod = $noperiod;
        $this->required = $required;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->checked = $checked;
    }

    public function render()
    {
        return view('components.inputs.date');
    }
}
