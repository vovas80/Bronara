<?php

namespace App\View\Components\Exchange;

use Illuminate\View\Component;
use App\Models\Country;
use App\Models\City;
use App\Models\Nigth;

class Searchform extends Component
{
    
    public $filters;
    public $countries;
    public $cities;
    public $nigths;
    public $dateFrom;
    public $dateTo;
    public $priceFrom;
    public $priceTo;
    public $checkedDate;
    public $checkedNight;
    public $checkedPrice;

    public function __construct($filters = [])
    {
        $this->filters = $filters;

        $city_model = new City();
        $cities = $city_model->get_cities();

        $this->cities = [];

        foreach ($cities as $city) {

            $active = false;

            if (isset($filters['city-from']) && $filters['city-from'] == $city->id) {
                $active = true;
            }

            $this->cities[] = [
                'title'     => $city->title,
                'value'     => $city->id,
                'active'    => $active,
            ];
        }

        $country_model = new Country();
        $countries = $country_model->get_countries();

        $this->countries = [];

        foreach ($countries as $country) {
            $active = false;

            if (isset($filters['country-to']) && $filters['country-to'] == $country->id) {
                $active = true;
            }

            $this->countries[] = [
                'title'     => $country->title,
                'value'     => $country->id,
                'active'    => $active,
            ];
        }

        $nigth_model = new Nigth();
        $nigths = $nigth_model->get_nigths();

        $this->nigths = [];
        foreach ($nigths as $nigth) {
            $active = false;

            if (isset($filters['night']) && $filters['night'] == $nigth->id) {
                $active = true;
            }

            $this->nigths[] = [
                'title'     => $nigth->title,
                'value'     => $nigth->id,
                'active'    => $active,
            ];
        }

        $this->dateFrom = $filters['date-from'] ?? '';
        $this->dateTo = $filters['date-to'] ?? '';
        $this->checkedDate = isset($filters['check-date']) && $filters['check-date'] == 1 ? true : false;
        $this->checkedPrice = isset($filters['check-price']) && $filters['check-price'] == 1 ? true : false;
        $this->checkedNight = isset($filters['check-night']) && $filters['check-night'] == 1 ? true : false;
        $this->priceFrom = $filters['price-from'] ?? '';
        $this->priceTo = $filters['price-to'] ?? '';
    }

    public function render()
    {
        return view('components.exchange.searchform');
    }
}
