<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lang;
use App\Region;

class RegionController extends Controller
{
	public function set_region (Request $r) {

		$country = $r->get('country');

		Region::set($country);

		return $this->response([]);
	}

}