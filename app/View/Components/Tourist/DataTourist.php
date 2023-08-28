<?php

namespace App\View\Components\Tourist;

use Illuminate\View\Component;
use App\Models\Citizenship;

class DataTourist extends Component
{
    public $citizenship;
    
    public function __construct()
    {
        $citizenship_model = new Citizenship();
        $citizenship = $citizenship_model->get_citizenship();

        $this->citizenship = [];

        foreach ($citizenship as $item) {
            $this->citizenship[] = [
                'title' => $item->title,
                'value' => $item->id,
            ];
        }
    }

    public function render()
    {
        return view('components.tourist.data-tourist');
    }
}
