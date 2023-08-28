<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends MultilanguageModel
{
    use HasFactory;

    protected $table = 'regions';

    public function get_by_title($title){
        return $this::where('title', $title)
        ->first();
    }
}
