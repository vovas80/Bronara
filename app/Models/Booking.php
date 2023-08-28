<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';

    public function get_booking_tours_for_tourist($id_tourist) {
        
        $id_tours = Tour::where('data_departure', '>', date("Y-m-d H:i:s", mktime(23,59,59)))->get()->pluck('id');
        $booking = $this::where('id_tourists', $id_tourist)->whereIn('id_tours', $id_tours)->get();

        return $booking;
    }

    public function get_document_for_tourist($id_tourist) {
        
        $id_tours = Tour::withoutGlobalScope('data_departure')->get()->pluck('id');
        
        $booking = $this::where('id_tourists', $id_tourist)->whereIn('id_tours', $id_tours)->where('id_booking_status', 1)->get();
   
        return $booking;
        
    }

    public function get_sold_tour_for_touragent($id_touragent) {
        
        $id_tours = Tour::withoutGlobalScope('data_departure')
        ->where('id_touragents', $id_touragent)
        ->where('data_departure', '<', date("Y-m-d H:i:s", mktime(23,59,59)))
        ->get()
        ->pluck('id');
        
        $booking = $this::whereIn('id_tours', $id_tours)->where('id_booking_status', 1)->get();
   
        return $booking;
        
    }

    public function get_booking_tours_for_touragent($id_touragent) {
        $id_tours = Tour::where('id_touragents', $id_touragent)->get()->pluck('id');

        $booking = $this::whereIn('id_tours', $id_tours)->get();

        return $booking;
    }

    public function tour(){
        return $this->belongsTo(Tour::class, 'id_tours')->withoutGlobalScope('data_departure');
    }

    public function visa(){
        return $this->belongsTo(Visa::class, 'id_visa');
    }

    public function tourist(){
        return $this->belongsTo(Tourist::class, 'id_tourists');
    }

    public function status(){
        return $this->belongsTo(BookingStatus::class, 'id_booking_status');
    }

    public function people() {
        return $this->hasMany(BookingTourist::class, 'id_booking');
    }
}
