<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Select extends Component
{
    public $items;
    public $current;
    public $action;
    public $name;
    public $isChecked;
    public $title;
    public $default;
    public $label;
    public $class;
    public $checkbox;

    public function __construct($items = [], $current = '', $action = '', $name = '', $title = '', $checkbox = false, $default = false, $label = '', $class = ''){

        $this->action = $action; 
        
        $collection_items = collect();

        foreach ($items as $item){

            if ($item['value'] === $current){
                $this->current = $item['title'];
                $item['active'] = true;

                if (!empty($current)){

                    $this->isChecked = true;
                }
                
            } else {

                $item['active'] = false;
            }
            
            $collection_items->push([
                'title'     => $item['title'],
                'value'     => $item['value'],
                'active'    => $item['active'],
            ]);
        }

        if (!empty($label)) {
            $this->isChecked = true;
        }

        $this->items = $collection_items;
        $this->name = $name;
        $this->title = $title;
        $this->default = $default;
        $this->label = $label;
        $this->checkbox = $checkbox;

        $class = explode(' ', $class);
        foreach ($class as &$class_item){
            $class_item = 'select-'.$class_item;
        }

        $this->class = implode(' ', $class);
    }

    public function render()
    {
        return view('components.inputs.select');
    }
}
