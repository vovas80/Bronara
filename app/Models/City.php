<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends MultilanguageModel
{
    protected $table = 'cities';

    public function get_cities(){

        return $this::orderBy('title', 'ASC')
        ->get();
    }

    public function application() {
        return $this->belongsToMany(Application::class, 'applications_cities', 'id_cities', 'id_applications');
    }

    public function country(){
        return $this->belongsTo(Country::class, 'id_countries');
    }
    
}
