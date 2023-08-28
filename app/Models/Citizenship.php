<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citizenship extends MultilanguageModel
{

    protected $table = 'citizenship';

    public function get_citizenship(){
        return $this::orderBy('title', 'ASC')
        ->get();
    }
}
