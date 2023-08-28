<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingStatus extends MultilanguageModel
{
    use HasFactory;

    protected $table = 'booking_status';
}
