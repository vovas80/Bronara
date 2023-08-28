<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CallbackSupport;
use App\Models\Touragent;

class CallbackController extends Controller
{
    public function send_callback_support (Request $r, Touragent $touragent_model) {

		$date = date('Y-m-d H:i:s');

		$id = $touragent_model->getIdByIDTouragent($r->get('id_touragent'));

		$callback = new CallbackSupport();
		$callback->message = $r->get('message');
		$callback->date = $date;
		$callback->show = 0;
		$callback->id_touragents = $id;

		$callback->save();

		return $this->response([]);
	}
}
