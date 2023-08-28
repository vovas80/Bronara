<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouragentApplication extends Model
{
    use HasFactory;

    protected $table = 'touragents_applications';

    public $timestamps = false;
}
