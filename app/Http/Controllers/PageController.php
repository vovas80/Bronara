<?php

namespace App\Http\Controllers;

use App\Models\StandartPage;
use App\Models\Touragent;
use App\Models\Tour;
use App\Region;
use Illuminate\Http\Request;

class PageController extends Controller
{
	public function index (Touragent $touragent_model, Tour $tour_model) {

		$region_id = Region::getId();

		$touragent_count = 25 + $touragent_model->where('id_regions', $region_id)->count();

		$tours = $tour_model->get_tours_for_mainpage();
		
		return view('pages.index', [
			'touragent_count'	=> $touragent_count,
			'tours'				=> $tours,
		]); 
	}

	public function contacts () {

		return view('pages.contacts', [

		]);
	}

	public function faq () {

		return view('pages.faq', [

		]);
	}

	public function standart ($slug = '') {

		$standart_page_model = new StandartPage();
		
		$page = $standart_page_model->get_by_slug($slug);

		if (empty($page))
			abort(404);

		return view('pages.standart', [
			'page'	=> $page,
		]); 
	}
}