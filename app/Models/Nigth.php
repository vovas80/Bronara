<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nigth extends MultilanguageModel
{
    protected $table = 'nigth';

    public function get_nigths(){

        return $this::orderBy('title', 'ASC')
        ->get();
    }
    
}
