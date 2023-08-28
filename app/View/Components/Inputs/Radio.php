<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Radio extends Component
{
    public $value;
    public $name;
    public $checked;
    public $title;
    public $extratext;
    public $required;
    public $class;
    public $id;
    public $booking;

    public function __construct($value = '', $name = '', $checked = false, $title = '', $extratext = '', $class = "",  $id = '', $booking = '', $required = false)
    {
        $this->value = $value;
        $this->name = $name;
        $this->checked = $checked;
        $this->title = $title;
        $this->extratext = $extratext;
        $this->required = $required;
        $this->id = $id;
        $this->booking = $booking;

        $class = explode(' ', $class);
        foreach ($class as &$class_item){
            $class_item = 'btn-'.$class_item;
        }

        $this->class = implode(' ', $class);
    }

    public function render()
    {
        return view('components.inputs.radio');
    }
}
