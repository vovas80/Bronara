<?php

namespace App\View\Components\Tourist;

use Illuminate\View\Component;

class Tabs extends Component
{
   
    public $route;
    public $tabs;

    public function __construct($route = '', $tabs = [])
    {
        $this->route = $route;
        $this->tabs = $tabs;

        foreach ($this->tabs as &$tab) {
            
            $tab['class'] = '';

            // var_dump($tab['link']);
            // var_dump($route);

            if ( $route == $tab['link'] ) {
                $tab['class'] = 'active';
            }
        }
    }


    public function render()
    {
        return view('components.tourist.tabs');
    }
}
