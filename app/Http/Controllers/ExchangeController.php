<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\View\Components\Exchange\Maintours;
use App\View\Components\Inc\Pagination;
use App\Helpers\Slug;
use App\Models\City;
use App\Models\Country;
use App\Models\Nigth;
use App\Models\Tour;
use App\View\Components\Modals\Tour as ModalsTour;
use CaseText;

class ExchangeController extends Controller
{
	public function exchange (Request $r,  Tour $tour_model, $slug = '') {
		
		$slug_filters = Slug::generate($slug);
	
		$city_from = City::find($slug_filters['city-from'] ?? '');
		$country_to = Country::find($slug_filters['coutry-to'] ?? '');
		$night = Nigth::find($slug_filters['night'] ?? '');

		$check_night = $slug_filters['check-night'] ?? '';
		$date_from = $slug_filters['date-from'] ?? '';
		if (!empty($date_from)) {

			$date_from = date("Y-m-d H:i:s", strtotime($date_from));
		}

		$date_to = $slug_filters['date-to'] ?? '';	

		if (!empty($date_to)) {
			$date_to = date( "Y-m-d H:i:s", strtotime($date_to));
		}
		$check_date = $slug_filters['check-date'] ?? '';
		
		$price_from = $slug_filters['price-from'] ?? '';
		$price_to = $slug_filters['price-to'] ?? '';
		$check_price = $slug_filters['check-price'] ?? '';
		
		$page = $r->get('page', 1);
		$pagesize = 6;
		$paglink = route('exchange', [], false);

		if(!empty($city_from || $country_to || $night || $check_night || $date_from || $date_to || $check_date || $price_from || $price_to || $check_price)) {
			[$tours, $count] = $tour_model->get_tours_by_filter($page, $pagesize, $city_from, $country_to, $night, $check_night, $date_from, $date_to, $check_date, $price_from, $price_to, $check_price);
		} else {
			[$tours, $count] = $tour_model->get_tours($page, $pagesize);
		}
		if ($r->isMethod('post')) {

			$maintours_component = new Maintours($tours);
			$pagination_component = new Pagination($count, $pagesize, $page, $paglink);

			return $this->response([
				'html'			=> $maintours_component->render(),
				'pagination'	=> $pagination_component->render(),
			]);

		}

		return view('pages.exchange', [
			'page'			=> $page,
			'count'			=> $count,
			'pagesize'		=> $pagesize,
			'paglink'		=> $paglink,
			'slug_filters'	=> $slug_filters,
			'tours'			=> $tours,
		]); 
	}	

	public function get_tour(Request $r, Tour $tour_model){
		$slug = $r->get('tour_slug');
	
		$tour = $tour_model->get_tour_by_slug($slug);
	
		$modals_tour_component = new ModalsTour($tour);

		return $this->response([
			'html'	=> $modals_tour_component->render(),
			'title'	=> $tour->title_hotel,
			'star' 	=> CaseText::stars($tour->stars->number),
			'lat'  	=> $tour->lat,
			'lng'  	=> $tour->lng,
		]);
	}

}