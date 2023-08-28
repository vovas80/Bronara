<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Counter extends Component
{
    public $title; 
    public $min; 
    public $max; 
    public $value; 
    public $step;
    public $readonly;
    public $minusAction;
    public $plusAction;
    public $class;
    
    public function __construct($title = '', $min = 1, $max = 40, $value = 1, $step = 1, $readonly = false, $minusAction = '', $plusAction ='', $class = ''){

        $this->class = $class;
        $this->title = $title;
        $this->min = $min;
        $this->max = $max;
        $this->value = $value;
        $this->step = $step;
        $this->readonly = $readonly;
        $this->minusAction = $minusAction;
        $this->plusAction = $plusAction;
        
    }

    public function render(){
        return view('components.inputs.counter');
    }
}
