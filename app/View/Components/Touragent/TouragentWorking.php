<?php

namespace App\View\Components\Touragent;

use Illuminate\View\Component;
use App\Models\Country;
use App\Models\City;
use App\Models\Nigth;
use App\Models\Tour;


class TouragentWorking extends Component
{
    public $count;
    public $pagesize;
    public $page;
    public $paglink;
    public $isWorking;

    public $applications;
    public $countries;
    public $cities;
    public $nigths;
    public $resorts;

    public function __construct($applications=[], $count, $pagesize, $page, $paglink, $isWorking = false)
    {
        $this->count = $count;
        $this->pagesize = $pagesize;
        $this->page = $page;
        $this->paglink = $paglink;
        $this->isWorking = $isWorking;
        $this->applications = $applications;

        $city_model = new City();
        $cities = $city_model->get_cities();

        $this->cities = [];

        foreach ($cities as $city) {
            $this->cities[] = [
                'title' => $city->title,
                'value' => $city->id,
            ];
        }

        $country_model = new Country();
        $countries = $country_model->get_countries();

        $this->countries = [];

        foreach ($countries as $country) {
            $this->countries[] = [
                'title' => $country->title,
                'value' => $country->id,
            ];
        }

        $nigth_model = new Nigth();
        $nigths = $nigth_model->get_nigths();

        $this->nigths = [];
        foreach ($nigths as $nigth) {
            $this->nigths[] = [
                'title' => $nigth->title . ' ночей',
                'value' => $nigth->id,
            ];
        }
    }

    public function render()
    {
        return view('components.touragent.touragent-working');
    }
    
}
