<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    protected $table = 'stars';

    public function get_stars(){

        return $this::orderBy('number', 'ASC')
        ->get();
    }
    
}
