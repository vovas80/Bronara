<?php

namespace App\Http\Controllers;

use App\Models\Saved;
use Illuminate\Http\Request;

class SavedController extends Controller
{
    public function saved (Request $r) {

		$input = $r->all();
        
		$saved = new Saved();
		
		switch ($saved->toggle($input['id_tour'])) {
			case 'Saved':
				return $this->response(['status' => true]);
				break;

			case 'Removed':
				return $this->response(['status' => false]);
				break;
		}

		return $this->error();
	}

	public function clear (Request $r) {

		$saved = new Saved();
		$saved->clear();

		return $this->response();
	} 
}
