<?php

namespace App\View\Components\Inc;

use Illuminate\View\Component;

class Timer extends Component
{
    public $class;

    public function __construct($class = "")
    {
        $this->class = $class;
    }

    
    public function render()
    {
        return view('components.inc.timer');
    }
}
