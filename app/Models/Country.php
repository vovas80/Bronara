<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends MultilanguageModel
{
    protected $table = 'countries';

    public function get_countries(){

        return $this::orderBy('title', 'ASC')
        ->get();
    }
    
}
