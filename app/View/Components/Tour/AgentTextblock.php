<?php

namespace App\View\Components\Tour;

use Illuminate\View\Component;

class AgentTextblock extends Component
{
    
    public $title;
    public $class;

    public function __construct($title = '', $class = '')
    {
        $this->title = $title;
        $this->class = $class;

    }



    public function render()
    {
        return view('components.tour.agent-textblock');
    }
}
