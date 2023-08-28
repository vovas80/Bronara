<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Button extends Component
{
    public $href;
    public $class;
    public $type;
    public $action;
    public $tooltip;
    public $counter;
    public $download;

    public function __construct($href = '', $class = '', $type = '', $action = '', $tooltip='', $counter = '', $download = false)
    {
        $this->href = $href;
        $this->counter = $counter;

        $class = explode(' ', $class);
        foreach ($class as &$class_item){
            $class_item = 'btn-'.$class_item;
        }

        $this->class = implode(' ', $class);

        $this->type = $type;
        $this->action = $action;
        $this->tooltip = $tooltip;
        $this->download = $download;

    }
    
    public function render()
    {
        return view('components.inputs.button');
    }
}
