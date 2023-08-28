<?php

namespace App\Http\Controllers;

use App\Helpers\MailSender;
use App\Models\Tourist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Lang;
use Validator;
use Single;

class TouristAuthController extends Controller
{
	
	public function login(Request $r) {
		
		$email = $r->get('email');
		$password = $r->get('password');
		
		if (Auth::guard('tourist')->attempt(['email' => $email, 'password' => $password], $r->get('remember') === 'true')) {

			return $this->response([
				'redirect'	=> route('tourist', '', false),
			]);
		}
		
		return $this->error();
	}

	public function logout() {
		
		Auth::guard('tourist')->logout();

		return $this->response();
	}

	public function register(Request $r) {

		$name = $r->get('name');
		$email = $r->get('email');
		$phone = $r->get('phone');
		$password = $r->get('password');

		$credentials = Validator::make($r->all(), [
            'email' => [
				'required', 
				'email', 
				'unique:tourists,email'
			],
            'phone' => [
				'required', 
				'unique:tourists,phone'
			],
            'password' => [
				'required', 
				'min:8'
			],
        ]);

		if($credentials->fails()) {

			return $this->error($credentials->errors());
		}

		$tourist = Tourist::create([
			'name'		  => $name,
			'surname'	  => '',
			'email'		  => $email,
			'password'	  => bcrypt($password),
			'phone'		  => $phone,
			'code'		  => '',
			'login'		  => '',
			'code'		  => '',
			'mark'		  => 0,
			'facebook_id' => '',
		]);

		Auth::guard('tourist')->login($tourist);

		return $this->response([
			'redirect'	=> route('tourist', '', false),
		]);

	}

	public function sendcode(Request $r) {


		$email = $r->get('email');

		$tourist = Tourist::where('email', $email)
		->first();

		if (empty($tourist))
			return $this->error([]);

		$code = $tourist->set_code();
		$tourist->code = $code;

		$tourist->save();

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
		
		$tourist = Tourist::where('email', $email)
		->where('code', $code)
		->first();

		if (empty($tourist))
			return $this->error([]);

		return $this->response([]);

	}

	public function changepassword(Request $r) {

		$email = $r->get('email');
		$code = $r->get('code');
		$password = $r->get('password');

		$tourist = Tourist::where('email', $email)
		->where('code', $code)
		->first();

		if (empty($tourist))
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

		$tourist->password = bcrypt($password);
		$tourist->clear_code();
		$tourist->save();

		return $this->response([]);
	
	}

	public function redirect_to_facebook() {
        return Socialite::driver('facebook')->redirect();
    }

    public function handle_facebook_callback() {
        $tourist = Socialite::driver('facebook')->user();

        $this->__registerOrLoginUser('facebook', $tourist);

        return redirect()->route('tourist');
    }

	protected function __registerOrLoginUser($social, $data) {
		
        if (Auth::guard('tourist')->user()) {
            
            $tourist = Auth::guard('tourist')->user();
        
        } else {

            $tourist = Tourist::where('email', $data->email)
            ->first();    
        }
        
        if (!$tourist) {

            $tourist = new Tourist();
            $tourist->name = $data->name;
            $tourist->email = $data->email;
            $tourist->facebook_id = $data->id;
        
        } else {
            $tourist->facebook_id = $data->id;
		}

        $tourist->save();

        Auth::guard('tourist')->login($tourist);
    }
}