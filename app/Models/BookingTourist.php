<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingTourist extends Model
{
    use HasFactory;

    protected $table = 'booking_tourist';

    public function citizenship(){
        return $this->belongsTo(Citizenship::class, 'id_citizenship');
    }
}
