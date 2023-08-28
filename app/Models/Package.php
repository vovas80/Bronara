<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends MultilanguageModel
{
    protected $table = 'packages';

    public function get_packages(){

        return $this::orderBy('title', 'ASC')
        ->get();
    }
    
}
