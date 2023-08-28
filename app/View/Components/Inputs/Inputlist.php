<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;
use App\Models\Star;
use App\Models\Food;

class Inputlist extends Component
{
    public $placeholder;
    public $type;
    public $class;
    public $required;
    public $label;
    public $name;
    public $items;
    public $checked;
    public $value;
    public $onchange;
    public $isSelect;

    public $stars;
    public $food;

    public function __construct($placeholder = "", $value="", $isSelect = false, $onchange ="", $type = "text", $class="default", $required = false, $label = '', $name = '', $checked = '', $items = []){

        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->class = $class;
        $this->required = $required;
        $this->label = $label;
        $this->name = $name;
        $this->checked = $checked;
        $this->value =  $value;
        $this->items = $items;
        $this->onchange = $onchange;
        $this->isSelect = $isSelect;

        $star_model = new Star();
        $stars = $star_model->get_stars();

        $this->stars = [];
        foreach ($stars as $star) {
            $this->stars[] = [
                'title' => $star->number,   
                'value' => $star->id,
            ];
        }

        $food_model = new Food();
        $food = $food_model->get_food();

        $this->food = [];
        foreach ($food as $elem) {
            $this->food[] = [
                'title' => $elem->title,
                'value' => $elem->id,
            ];
        }

    }

    public function render()
    {
        return view('components.inputs.inputlist');
    }
}
