<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Touragent extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id_touragent',
        'company',
        'name',
        'email',
        'phone',    
        'password',
        'id_regions',
		'photo',
		'address',
		'work' ,
		'mark',
		'license',
		'documents',
        'date_update',
        'code',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getIdByIDTouragent($id_touragent) {
        return $this->where('id_touragent', $id_touragent)
        ->first()->id ?? 0;
    }

    public function set_code() {

        $code = rand(1000, 9999);
        $this->code = $code;

        return $code;
    }

    public function clear_code() {
        
        $this->code = '';
    }

    public static function createPassword() {

        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array(); 
		$alphaLength = strlen($alphabet) - 1; 

		for ($i = 0; $i < 10; $i++) {
		
            $n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}

		return implode($pass); 
    }
}
