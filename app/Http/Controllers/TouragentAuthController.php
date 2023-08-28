<?php

namespace App\Http\Controllers;

use App\Helpers\MailSender;
use App\Models\Touragent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Lang;
use Validator;
use Single;

class TouragentAuthController extends Controller
{
	
	public function login(Request $r) {
		
		$id_touragent = $r->get('id');
		$password = $r->get('password');
		
		if (Auth::guard('touragent')->attempt(['id_touragent' => $id_touragent, 'password' => $password], $r->get('remember') === 'true')) {

			return $this->response([
				'redirect'	=> route('touragent', '', false),
			]);
		}
		
		return $this->error();
	}

	public function logout() {
		
		Auth::guard('touragent')->logout();

		return $this->response();
	}

	public function register(Request $r) {

		$company = $r->get('company');
		$name = $r->get('name');
		$email = $r->get('email');
		$phone = $r->get('phone');
		$password = $r->get('password');

		$credentials = Validator::make($r->all(), [
            'email' => [
				'required', 
				'email', 
				'unique:touragents,email'
			],
            'phone' => [
				'required', 
				'unique:touragents,phone'
			],
            'password' => [
				'required', 
				'min:8'
			],
        ]);

		if($credentials->fails()) {

			return $this->error($credentials->errors());
		}
        
		$touragent = Touragent::create([
            'id_touragent'  => '',
			'name'		    => $name,
			'company'	    => $company,
			'email'		    => $email,
			'password'	    => bcrypt($password),
			'phone'		    => $phone,
			'id_regions'	=> 1,
			'photo' 		=> '',
			'address' 		=> '',
			'work' 			=> '',
			'mark' 			=> 0,
			'license'		=> '',
			'code' 			=> '',
			'documents' 	=> '',
			'date_update'   => date('Y-m-d H:i:s'),
		]);

        Touragent::where('id', $touragent->id)
		    ->update([
                'id_touragent' => 100000 + $touragent->id,
        ]);


		Auth::guard('touragent')->login($touragent);

		return $this->response([
			'redirect'	=> route('touragent', '', false),
		]);

	}

	public function sendcode(Request $r) {

		$email = $r->get('email');

		$touragent = Touragent::where('email', $email)
		->first();

		if (empty($touragent))
			return $this->error([]);

		$code = $touragent->set_code();
		$touragent->code = $code;

		$touragent->save();

        $s = new Single('Модальные окна (забыли пароль)', 10, 3);

		$message = $s->field('Забыли пароль', 'Ваш код', 'textarea', true, 'Ваш код');
		$message .= ' '.$code;

		$header = $s->field('Забыли пароль', 'Сброс пароля', 'textarea', true, 'Сброс пароля');

		$mail_sender = new MailSender();
		$mail_sender->send($email, $header, $message);

		return $this->response([]);

	}
	
	public function checkcode(Request $r) {

		$email = $r->get('email');
		$code = $r->get('code');
		
		$touragent = Touragent::where('email', $email)
		->where('code', $code)
		->first();

		if (empty($touragent))
			return $this->error([]);

		return $this->response([]);

	}

	public function changepassword(Request $r) {

		$email = $r->get('email');
		$code = $r->get('code');
		$password = $r->get('password');

		$touragent = Touragent::where('email', $email)
		->where('code', $code)
		->first();

		if (empty($touragent))
			return $this->error([]);
			

		$credentials = Validator::make($r->all(), [
			'email' => [
				'email', 
			],
			'password' => [
				'required', 'min:8'
			],
			'password_confirmation' => [
				'same:password'
			]
		]);

		if($credentials->fails()) {

			return $this->error($credentials->errors());
		}

		$touragent->password = bcrypt($password);
		$touragent->clear_code();
		$touragent->save();

		return $this->response([]);
	
	}
}