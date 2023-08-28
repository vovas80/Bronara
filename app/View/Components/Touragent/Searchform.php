<?php

namespace App\View\Components\Touragent;

use Illuminate\View\Component;
use App\Models\Country;

class Searchform extends Component
{
    public $countries;

    public function __construct($countries = [])
    {
        $country_model = new Country();
        $countries = $country_model->get_countries();

        $this->countries = [];

        foreach ($countries as $country) {
            $this->countries[] = [
                'title' => $country->title,
                'value' => $country->id,
            ];
        }
    }

    public function render()
    {
        return view('components.touragent.searchform');
    }
}
