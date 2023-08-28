<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Years extends MultilanguageModel
{
    protected $table = 'years';

    public function get_years(){

        return $this::orderBy('title', 'ASC')
        ->get();
    }
    
}
