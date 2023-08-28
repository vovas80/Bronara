<?php

namespace App\Models;

use App\Models\Saved;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use Auth;

class Tour extends MultilanguageModel
{
    protected $table = 'tours';
    protected $appends = ['saved'];

    public function get_tours($page = 1, $pagesize = 6) {

        $count_variants = $this->select('title_hotel', 'id_cities_from', 'id_cities_to')
        ->groupBy('title_hotel', 'id_cities_from', 'id_cities_to')
        ->get()->count();

        $variants = $this->select('title_hotel', 'id_cities_from', 'id_cities_to')
        ->groupBy('title_hotel', 'id_cities_from', 'id_cities_to')
        ->skip(($page - 1) * $pagesize)
        ->limit($pagesize)
        ->get();

        $tours_query = $this;

        foreach ($variants as $key => $variant) {
            
            if ($key == 0) {

                $tours_query = $tours_query->where([
                    'title_hotel'       => $variant->title_hotel,
                    'id_cities_from'    => $variant->id_cities_from,
                    'id_cities_to'      => $variant->id_cities_to
                ]);
            } else {
                $tours_query = $tours_query->orWhere([
                    'title_hotel'       => $variant->title_hotel,
                    'id_cities_from'    => $variant->id_cities_from,
                    'id_cities_to'      => $variant->id_cities_to
                ]);
            }
        }

        $tours = $tours_query->get();
      

        foreach($tours as $tour){
            if ($tour->related_saved()->count() && Auth::guard('tourist')->user()){
                if ($tour->related_saved()->where('id_tourists', Auth::guard('tourist')->user()->id)->count())
                $tour->saved = true;
            } else
                $tour->saved = false;	
        }
        

        $grouped_tours = collect();

        foreach ($variants as &$variant) {

            $variant_tours = $tours->where('title_hotel', $variant->title_hotel)
            ->where('id_cities_from', $variant->id_cities_from)
            ->where('id_cities_to', $variant->id_cities_to);

            $maintour = $variant_tours->firstWhere('price', $variant_tours->min('price'));
            $maintour->tours = $variant_tours->where('id', '!=', $maintour->id);

            $grouped_tours->push($maintour);
        }

        return [
            $grouped_tours,
            $count_variants
        ];
    }

    public function get_tours_by_filter($page = 1, $pagesize = 6, $city_from, $country_to, $night, $check_night, $date_from, $date_to, $check_date, $price_from, $price_to, $check_price) {

        $count_variants = $this->select('title_hotel', 'id_cities_from', 'id_cities_to')
        ->groupBy('title_hotel', 'id_cities_from', 'id_cities_to')
        ->get()->count();

        $variants = $this->select('title_hotel', 'id_cities_from')
        ->groupBy('title_hotel', 'id_cities_from', 'id_cities_to')
        ->skip(($page - 1) * $pagesize)
        ->limit($pagesize)
        ->get();

        $tours_query = $this;

        foreach ($variants as $key => $variant) {
            
            if ($key == 0) {

                $tours_query = $tours_query->where([
                    'title_hotel'       => $variant->title_hotel,
                    'id_cities_from'    => $variant->id_cities_from,
                    'id_cities_to'      => $variant->id_cities_to
                ]);
            } else {
                $tours_query = $tours_query->orWhere([
                    'title_hotel'       => $variant->title_hotel,
                    'id_cities_from'    => $variant->id_cities_from,
                    'id_cities_to'      => $variant->id_cities_to
                ]);
            }
        }  

        $tours = $tours_query
        ->get()
        ->where('data_departure', '>=', $date_from)
        ->where('data_arrival', '<=', $date_to)
        ->where('price', '<=', round($price_to, 2))
        ->where('price', '>=', round($price_from, 2));
        dd($tours);

        foreach($tours as $tour){
            
            if ($tour->related_saved()->count() && Auth::guard('tourist')->user()){
                if ($tour->related_saved()->where('id_tourists', Auth::guard('tourist')->user()->id)->count())
                $tour->saved = true;
            } else
                $tour->saved = false;	
        }
        

        $grouped_tours = collect();

        foreach ($variants as &$variant) {

            $variant_tours = $tours->where('title_hotel', $variant->title_hotel)
            ->where('id_cities_from', $variant->id_cities_from)
            ->where('id_cities_to', $variant->id_cities_to);

            $maintour = $variant_tours->firstWhere('price', $variant_tours->min('price'));
            $maintour->tours = $variant_tours->where('id', '!=', $maintour->id);

            $grouped_tours->push($maintour);
        }

        return [
            $grouped_tours,
            $count_variants
        ];
    }

    public function get_tour_by_slug($slug) {

        $tour = $this::where('slug', $slug)->withoutGlobalScope('data_departure')
        ->first();

        if (!empty($tour))
		    $tour->gallery = json_decode($tour->gallery);

        return $tour;
    }

    public function get_tours_for_mainpage(){
        $tours = $this::where('show_mainpage', '1')
        ->get();

        foreach($tours as $tour){
            if ($tour->related_saved()->count() && Auth::guard('tourist')->user()){
                if ($tour->related_saved()->where('id_tourists', Auth::guard('tourist')->user()->id)->count())
                $tour->saved = true;
            } else
                $tour->saved = false;	
        }

        return $tours;
    }

    public function get_tours_by_hotel() {

        return $this->select('title_hotel')
        ->groupBy('title_hotel')
        ->get();
    }

    public function stars(){
        return $this->belongsTo(Star::class, 'id_stars');
    }

    public function reviews(){
        return $this->hasMany(Review::class, 'id_tours');
    }

    public function cityto(){
        return $this->belongsTo(City::class, 'id_cities_to');
    }

    public function cityfrom(){
        return $this->belongsTo(City::class, 'id_cities_from');
    }

    public function night(){
        return $this->belongsTo(Nigth::class, 'id_nigth');
    }

    public function food(){
        return $this->belongsTo(Food::class, 'id_food');
    }

    public function child(){
        return $this->belongsTo(Child::class, 'id_child');
    }

    public function people(){
        return $this->belongsTo(People::class, 'id_people');
    }

    public function accommodation(){
        return $this->belongsTo(Accommodation::class, 'id_accommodation');
    }

    public function visa(){
        return $this->belongsTo(Visa::class, 'id_visa');
    }

    public function touragent(){
        return $this->belongsTo(Touragent::class, 'id_touragents');
    }

    public function characteristics() {
        return $this->hasMany(Characteristic::class, 'id_tours');
    }

    public function advantages() {
        return $this->hasMany(Information::class, 'id_tours');
    }

    public function get_countries_for_tourist($tours){

        $id_cities = $tours->pluck('id_cities_to');

        $id_countries = City::whereIn('id', $id_cities)->pluck('id_countries');

        $countries = Country::whereIn('id', $id_countries)->get();

        return $countries;
    }

    public function getSavedAttribute(){
        if (Auth::guard('tourist')->user() && $this->related_saved()->where('id_tourists', Auth::guard('tourist')->user()->id)->count()){
            return true;
        } else {
            return false;  
        }
    }

    public function related_saved(){
        return $this->hasMany(Saved::class, 'id_tours');
    }

    public function get_tours_by_country($tours_all, $country) {

        $id_country = Country::where('slug', $country)->first()->id;

        $id_cities_all = $tours_all->pluck('id_cities_to');

        $id_cities = City::whereIn('id', $id_cities_all)->where('id_countries', $id_country)->pluck('id');

        $tours = $tours_all->whereIn('id_cities_to', $id_cities);

        return $tours;
    }

    protected static function booted(){

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('data_departure', 'DESC');
        });

        static::addGlobalScope('data_departure', function (Builder $builder) {
            $builder->where('data_departure', '>', date("Y-m-d H:i:s", mktime(23,59,59)));
        });

    }
    
}
