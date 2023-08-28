<?php

namespace App\Models;

use App\Models\Tour;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Saved extends Model
{
    protected $table = 'saved';
	public $timestamps = false;

	protected $saved = null;

	public function toggle ($tour_id) {

		$tourist = Auth::guard('tourist')->user();

		if(!empty($tourist)){

			$saved = $this->where('id_tours', $tour_id)
			->where('id_tourists', $tourist->id)
			->first();

			if (empty($saved)) {
	
				$tour = Tour::select('id')
				->where('id', $tour_id)
				->first();
	
				if (empty($tour)) {
					return 'Error';
				}

				$new_saved = new Saved();
				
				$new_saved->id_tours = $tour->id;
				$new_saved->id_tourists = $tourist->id;
				
				$new_saved->save();
	
				return 'Saved';
	
			}
	
			$this->where('id_tours', $tour_id)
			->where('id_tourists', $tourist->id)
			->delete();
			
			return 'Removed';

		} else {

			return 'Not user';
		
		}
		
	}

	public function clear (){

		$this->where('id_tourists', Auth::guard('tourist')->user()->id)
		->delete();
	}

	public function get () {

		if ($this->saved != null) {
			return $this->saved;
		}

		$tourist = Auth::guard('tourist')->user();

		if (!empty($tourist)) {

			$this->saved = $this->where('id_tourists', $tourist->id)
			->get();

			$tours = Tour::select('id')
			->whereIn('id', $this->saved->pluck('id_tours'))
			->get()
			->pluck('id');

			foreach ($this->saved as $key => $saved) {

				$tours_to_delete = [];

				if (!$tours->contains($saved->id_tours)) {

					$tours_to_delete[] = $saved->id_tours;
					$this->saved->forget($key);
				}

				$this->whereIn('id_tours', $tours_to_delete)
				->delete();
			}

		} else {

			$this->saved = collect([]);
		}

		return $this->saved;
	}

}