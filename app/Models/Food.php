<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends MultilanguageModel
{
    protected $table = 'food';

    public function get_food(){
        return $this::orderBy('title', 'ASC')
        ->get();
    }
    
}
