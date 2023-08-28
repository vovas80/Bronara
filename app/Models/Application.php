<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applications';

    public function city(){
        return $this->belongsTo(City::class, 'id_cities');
    }

    public function country(){
        return $this->belongsTo(Country::class, 'id_countries');
    }

    public function nigth(){
        return $this->belongsTo(Nigth::class, 'id_nigth');
    }

    public function tourist(){
        return $this->belongsTo(Tourist::class, 'id_tourists');
    }

    public function cities() {
        return $this->belongsToMany(City::class, 'applications_cities', 'id_applications', 'id_cities');
    }

    public function hotels() {
        return $this->belongsToMany(Tour::class, 'applications_tours', 'id_applications', 'id_tours');
    }

    public function get_applications_by_tourist($id_tourist) {
        return $this->where('id_tourists', $id_tourist)->get();
    }

    public function touragents() {
        return $this->belongsToMany(TouragentsApplications::class, 'touragents_applications', 'id_applications', 'id_touragents');
    }

    public function get_applications_touragent($id_touragent, $date) {

        $applications = $this
        ->where('show', 0)
        ->where('date', '<=', $date)->get();

        dd($id_applications);

        return $applications;

    }

    protected static function booted(){

        static::addGlobalScope('delete', function (Builder $builder) {
            $builder->where('delete', 0);
        });

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('date', 'DESC');
        });

        static::addGlobalScope('date_from', function (Builder $builder) {
            $builder->where('data_from', '>', date('Y-m-d'));
        });

    }

    
}
