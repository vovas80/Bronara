<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\ApplicationCity;
use App\Models\ApplicationHotel;
use App\View\Components\Tourist\Application as ApplicationComponent;
use Auth;


class ApplicationController extends Controller
{
    public function send_application (Request $r) {

		$date = date('Y-m-d H:i:s');

		$tourist = Auth::guard('tourist')->user();
		
		if (!isset($tourist)) {
			return $this->response([
				'reload' 	=> true,
				'link'		=> route('exchange', [], true),
			]);
		}
		$count = Application::where('id_tourists', $tourist->id)->count();

		if ($count >= 3) {
			return $this->response([
				'modal' => true,
			]);
		} 

		$application = new Application();
		$application->id_tourists = $tourist->id ?? 0;
		$application->id_cities = $r->get('city_from') ?? 0;
		$application->id_countries = $r->get('country_to') ?? 0;
		$application->data_from = date_format(date_create_from_format('d.m.y', $r->get('data_from')), "Y-m-d") ?? 0;
		$application->data_to = date_format(date_create_from_format('d.m.y', $r->get('data_to')), "Y-m-d") ?? 0;
		$application->id_nigth = $r->get('nigth') ?? 0;
		$application->id_stars = $r->get('stars') ?? 0;
		$application->id_food = $r->get('food') ?? 0;
		$application->price_from = $r->get('price_from') ?? 0;
		$application->price_to = $r->get('price_to') ?? 0;
		$application->id_packages = $r->get('package_tour') ?? 0;
		$application->info = $r->get('info') ?? '';
		$application->check_data = $r->get('check_data') ?? 0;
		$application->check_nigth = $r->get('check_nigth') ?? 0;
		$application->check_hotel = $r->get('check_hotel') ?? 0;
		$application->check_food = $r->get('check_food') ?? 0;
		$application->check_price = $r->get('check_price') ?? 0;
		$application->date = $date;
		$application->show = 0;
		$application->delete = 0;
        $application->cities_all = $r->get('curorts_all') ?? 0;

		$application->save();

        if(!empty($r->get('curorts'))) {
            foreach($r->get('curorts') as $curort){
                $application_city = new ApplicationCity();
                $application_city->id_applications = $application->id;
                $application_city->id_cities = $curort;
                $application_city->save();
            }
        }

        if(!empty($r->get('hotels'))) {
            foreach($r->get('hotels') as $hotel){
                $application_hotel = new ApplicationHotel();
                $application_hotel->id_applications = $application->id;
                $application_hotel->id_tours = $hotel;
                $application_hotel->save();
            }
        }

		return $this->response([]);
	}

	public function delete_application (Request $r) {

		Application::where('id', $r->get('id_application'))
		->update([
			'delete' => 1,
		]);

		return $this->response([]);

	}

	public function show_application_for_touragent(Request $r) {

		$application = Application::where('id', $r->get('id_application'))->first();

		if($application->show == 1){
			Application::where('id', $r->get('id_application'))
			->update([
				'show' => 0,
			]);
		} else {
			Application::where('id', $r->get('id_application'))
			->update([
				'show' => 1,
			]);
		}

		return $this->response([]);

	}
}
