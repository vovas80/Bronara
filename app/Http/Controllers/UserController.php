<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user (Request $r) {

		$route = $r->route()->getName();

		return view('pages.user', [
			'route'		=> $route,
		]); 
	}

	public function tours (Request $r) {

		$route = $r->route()->getName();

		return view('pages.user', [
			'route'		=> $route,
		]); 
	}

	public function booking (Request $r) {

		$route = $r->route()->getName();

		return view('pages.user', [
			'route'		=> $route,
		]); 
	}

	public function document (Request $r) {

		$route = $r->route()->getName();

		return view('pages.user', [
			'route'		=> $route,
		]); 
	}

	public function application (Request $r) {

		$route = $r->route()->getName();

		return view('pages.user', [
			'route'		=> $route,
		]); 
	}

	public function add_tourist(Request $r) {

		// $tourist_component = new Tourist();

		return $this->response([
			// 'tourist'	=> $tourist_component->render(),
		]);
	}
}
