<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Whom extends Component
{
    public $class;
    public $id;
    public $onclick;

    public function __construct($class = '', $id = '',  $onclick = '')
    {
        $this->id = $id;
        $this->onclick = $onclick;

        $class = explode(' ', $class);
        foreach ($class as &$class_item){
            $class_item = $class_item;
        }

        $this->class = implode(' ', $class);

    }


    public function render()
    {
        return view('components.inputs.whom');
    }
}
