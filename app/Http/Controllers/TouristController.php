<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tourist;
use App\Models\Country;
use App\Models\Tour;
use App\Models\Booking;
use App\Models\Application;
use App\View\Components\Exchange\Maintours;
use App\View\Components\Modals\BookTour;
use Auth;

class TouristController extends Controller
{
    public function tourist (Request $r) {

		if(!Auth::guard('tourist')->check()){
			abort(404);
		}

		$route = $r->route()->getName();

		$tourist = Auth::guard('tourist')->user();

		return view('pages.tourist', [
			'route'		=> $route,
			'tourist'   => $tourist,
		]); 
	}

	public function save_tourist(Request $r) {

		$name = $r->get('name');
		$email = $r->get('email');
		$phone = $r->get('phone');

		$tourist = Tourist::where('id', Auth::guard('tourist')->id())
		->first();

		$tourist->name = $name;
		$tourist->email = $email;
		$tourist->phone = $phone;

		$tourist->save();

		return $this->response();
	}

	public function tours (Request $r, Tour $tour_model) {


		if(!Auth::guard('tourist')->check()){
			abort(404);
		}

		$route = $r->route()->getName();
		$tourist = Auth::guard('tourist')->user();

		$country = $r->get('country', '');
	
		if ($country) {

			$tours = $tour_model->get_tours_by_country($tourist->saved_tours, $country);

		} else {
			$tours = $tourist->saved_tours;
		}

		$tourist->countries = $tour_model->get_countries_for_tourist($tourist->saved_tours);

		if ($r->isMethod('post')){
			
			$tours_component = new Maintours($tours, $isUserTours = true);
			
			return $this->response([
				'html'	=> $tours_component->render(),
			]);
		}


		return view('pages.tourist', [
			'route'		=> $route,
			'tourist'   => $tourist,
			'tours'		=> $tours,
			'country'   => $country,
		]); 
	}

	public function booking (Request $r, Booking $booking_model) {

		if(!Auth::guard('tourist')->check()){
			abort(404);
		}

		$route = $r->route()->getName();
		$tourist = Auth::guard('tourist')->user();

		$booking_tours = $booking_model->get_booking_tours_for_tourist($tourist->id);

		return view('pages.tourist', [
			'route'			=> $route,
			'tourist'   	=> $tourist,
			'booking_tours'	=> $booking_tours,
		]); 
	}

	public function document (Request $r, Booking $booking_model) {

		if(!Auth::guard('tourist')->check()){
			abort(404);
		}

		$route = $r->route()->getName();
		$tourist = Auth::guard('tourist')->user();

		$booking_tours = $booking_model->get_document_for_tourist($tourist->id);

		return view('pages.tourist', [
			'route'			=> $route,
			'tourist'   	=> $tourist,
			'booking_tours'	=> $booking_tours,
		]); 
	}

	public function application (Request $r, Country $country_model, Application $application_model) {

		if(!Auth::guard('tourist')->check()){
			abort(404);
		}

		$route = $r->route()->getName();
		$tourist = Auth::guard('tourist')->user();

		$applications = $application_model->get_applications_by_tourist($tourist->id);

		$countries = $country_model->get_countries();

		return view('pages.tourist', [
			'route'		=> $route,
			'tourist'   => $tourist,
			'countries'	=> $countries,
			'applications' => $applications,
		]); 
	}

	// public function add_tourist(Request $r) {

	// 	// $tourist_component = new Tourist();

	// 	return $this->response([
	// 		// 'tourist'	=> $tourist_component->render(),
	// 	]);
	// }
}
