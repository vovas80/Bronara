<?php

namespace App\View\Components\Index;

use App\Models\Region as ModelsRegion;
use App\Region;
use Illuminate\View\Component;
use App\Models\Country;
use App\Models\City;
use App\Models\Nigth;
use App\Models\Tour;
use App\Models\Package;
use Single;

class Form extends Component
{
    public $fields = [];
    public $countries;
    public $cities;
    public $nigths;
    public $resorts;
    public $hotels;
    public $packages;

    public function __construct()
    {
        $s = new Single('Форма подобрать тур', 7, 3);

        $region_title = Region::get();			

        $region_model = new ModelsRegion();
        $currency = $region_model->get_by_title($region_title);

        $country_model = new Country();
        $countries = $country_model->get_countries();

        $this->countries = [];

        foreach ($countries as $country) {
            $this->countries[] = [
                'title' => $country->title,
                'value' => $country->id,
            ];
        }

        $city_model = new City();
        $cities = $city_model->get_cities();

        $this->cities = [];

        foreach ($cities as $city) {
            $this->cities[] = [
                'title' => $city->title,
                'value' => $city->id,
            ];
        }

        $resorts = $city_model->get_cities();
        $this->resorts = [];

        foreach ($resorts as $resort) {
            
            $this->resorts[] = [
                'title' => $resort->title,
                'value' => $resort->id,
            ];
        }


        $nigth_model = new Nigth();
        $nigths = $nigth_model->get_nigths();

        $this->nigths = [];
        foreach ($nigths as $nigth) {
            $this->nigths[] = [
                'title' => $nigth->title,
                'value' => $nigth->id,
            ];
        }


        $package_model = new Package();
        $packages = $package_model->get_packages();

        $this->packages = [];
        foreach ($packages as $packege) {
            $this->packages[] = [
                'title' => $packege->title,
                'value' => $packege->id,
            ];
        }


        $hotel_model = new Tour();
        $hotels = $hotel_model->get_tours_by_hotel();

        $this->hotels = [];
        foreach ($hotels as $hotel) {
            $this->hotels[] = [
                'title' => $hotel->title_hotel,
                'value' => $hotel->id,
            ];
        }

        $this->fields = [
            'currency'  => $currency,
            'city_from' => $s->field('Форма', 'Город вылета:', 'text', true, 'Город вылета:'),
            'success'   => $s->field('Форма', 'Успешно', 'text', true, 'Спасибо за заявку! Ожидайте предложений от турагентов!'),
            'error'     => $s->field('Форма', 'Ошибка', 'text', true, 'Ошибка! Проверьте введенные данные!'),
        ];

    }

    
    public function render()
    {
        return view('components.index.form');
    }
}
