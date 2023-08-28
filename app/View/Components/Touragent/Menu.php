<?php

namespace App\View\Components\Touragent;

use Illuminate\View\Component;

class Menu extends Component
{
    
    public $route;

    public function __construct($route = '')
    {
        $this->route = $route;
    }
    
    public function render()
    {
        return view('components.touragent.menu');
    }
}
