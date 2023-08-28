<?php

namespace App\View\Components\Tourist;

use Illuminate\View\Component;

class Tab extends Component
{
   public $link;
   public $class;
   public $counter;

    public function __construct($link = "", $class = "", $counter = "")
    {
        $this->link = $link;
        $this->class = $class;
        $this->counter = $counter;
    }

    
    public function render()
    {
        return view('components.tourist.tab');
    }
}
