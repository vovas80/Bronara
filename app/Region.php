<?php 

namespace App;

use Lang;
use DB;
use App\Models\Region as RegionModel;

class Region {

	private static $region = null;
    private static $main_table = 'regions_ru';

	public static function set ($country) {

        $id_country = RegionModel::select('id')->where('title', $country)
        ->first()->id;

        $country = DB::table(self::$main_table)
        ->where('id', $id_country)
        ->first();

		return self::install($country->title);
	}

	public static function get () {

		if (self::$region != null) {
			return self::$region;
		}

		$region = session('region', '');

        if (!empty($region)) {
			self::$region = self::install($region ?? 'Украина');
		} else {
			self::$region = self::find();
		}

		return self::$region;
	}

    public static function getId() {

        $region_title = self::get();

        return RegionModel::select('id')->where('title', $region_title)
        ->first()->id ?? 0;
    }

    public static function getCurrency() {

        $region_title = self::get();

        return RegionModel::select('currency')->where('title', $region_title)
        ->first()->currency ?? '';
    }

	private static function find () {

        if (isset($_SERVER['HTTP_USER_AGENT']) && !preg_match('/bot|crawl|slurp|spider|mediapartners/i', $_SERVER['HTTP_USER_AGENT'])) {
                
            include base_path('app/SxGeo.php');

            $SxGeo = new \SxGeo(base_path('app/SxGeo.dat'));

            $ip = $_SERVER['REMOTE_ADDR'];
            //$ip = '128.140.240.0'; //France

            $country = $SxGeo->get($ip);
            //dd($country);
        
        }

        if (empty($country)) {
            $country = 'UA';
        } else {
            $country = !empty($country) ? $country : 'UA';
        }

        //if (Lang::get() != 'ru') {

        $country_id = DB::table(self::$main_table)
        ->where('code', $country)
        ->first();

        if (!empty($country_id)) {

            $country = RegionModel::where('id', $country_id->id)
            ->first()->title;
        }
        //}

		return self::install($country);
	}

	private static function install ($country) {
		
        $id_region = DB::table(self::$main_table)
        ->select('id')
        ->where('title', $country)
        ->first();

		if (empty($id_region)) {

            $id_region = DB::table(self::$main_table)
            ->select('id')
            ->where('title', 'Украина')
            ->first();    
        }

        $region = RegionModel::where('id', $id_region->id)->first();

		session([
			'region' => $country,
		]);

		return $region->title;
	}

}