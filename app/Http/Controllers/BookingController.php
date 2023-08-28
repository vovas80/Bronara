<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tourist;
use App\Models\Tour;
use App\Models\Booking;
use App\Models\Touragent;
use App\Models\BookingTourist;
use App\View\Components\Modals\BookTour;
use App\View\Components\Tour\BookingStatus;
use App\View\Components\Touragent\BookingTours;
use App\View\Components\Modals\TouragentTour as ModalsTour;

use Auth;
use CaseText;

class BookingController extends Controller
{

	public function booking_tour(Request $r, Tour $tour_model){
		$slug = $r->get('tour_slug');

		$tour = $tour_model->get_tour_by_slug($slug);

		$modals_tour_component = new BookTour($tour);
		
		return $this->response([
			'html'	=> $modals_tour_component->render(),
		]);
	}

	public function send_booking_tour (Request $r) {

		$date = date('Y-m-d H:i:s');

		$tourist = Auth::guard('tourist')->user();

		$booking = new Booking();
		$booking->id_tourists = $tourist->id ?? 0;
		$booking->id_tours = $r->get('id_tour');
		$booking->date = $date;
		$booking->id_booking_status = 0;
		$booking->ticket = '';
		$booking->voucher = '';
		$booking->insurance = '';
		$booking->memo = '';
		$booking->treaty = '';
		$booking->id_visa = 0;
		$booking->innings = NULL;
		$booking->payment = NULL;
		$booking->remainder = '';
		$booking->save();

        foreach($r->get('tourists') as $tourist){
            $booking_tourist = new BookingTourist();
            $booking_tourist->first_name = $tourist['firstName'];
            $booking_tourist->second_name = $tourist['secondName'];
            $booking_tourist->third_name = $tourist['thirdName'];
            $booking_tourist->date_of_birth = $tourist['dateOfBirth'];
            $booking_tourist->passport = $tourist['passport'];
            $booking_tourist->valid = $tourist['date'];
            $booking_tourist->authority = $tourist['issued'];
            $booking_tourist->id_citizenship = $tourist['citizenship'];
            $booking_tourist->id_booking = $booking->id;

            $booking_tourist->save();
        }


		return $this->response([]);
	}

	public function get_booking_tour(Request $r, Tour $tour_model) {
		$slug = $r->get('tour_slug');
		$id_booking = $r->get('id_booking');

		$tour = $tour_model->get_tour_by_slug($slug);
		$tour->tourists = Booking::where('id', $id_booking)->first()->people;
		$tour->status = Booking::where('id', $id_booking)->first()->status;
		$tour->id_booking = $id_booking;
	
		$modals_tour_component = new ModalsTour($tour);

		return $this->response([
			'html'			=> $modals_tour_component->render(),
			'title'			=> $tour->title_hotel,
			'star' 			=> CaseText::stars($tour->stars->number),
			'lat'  			=> $tour->lat,
			'lng'  			=> $tour->lng,
		]);

	}

	public function save_status (Request $r, Tour $tour_model) {

		$slug = $r->get('tour_slug');
		$id_status = $r->get('id_status') ?? 0;
		$id_booking = $r->get('id_booking');

		$id_tour = $tour_model->get_tour_by_slug($slug)->id;

		$id_tourist = Booking::where('id', $id_booking)->first()->tourist->id;
		
		Booking::where('id', $id_booking)
		->update([
			'id_booking_status' => $id_status,
		]);

		$statustour = Booking::where('id', $id_booking)->first()->status;

		$booking_status_component = new BookingStatus($statustour, $statuses = [], $slug, $id_booking);

		return $this->response([
			'html'	=> $booking_status_component->render(),
		]);
	}

	public function save_document(Request $r) {

		$document = $r->file('document');
		$name = $r->name;
		$id_booking = $r->id_booking;

		$uploaded_file = '';
		if(!empty($document)) {
			$upload_path = "files/1/touragent/";
			$file = $r->file('document');
			if ($file != null) {
				$file_name = time().'_'.$file->getClientOriginalName();
				$file->move($upload_path, $file_name);
				$uploaded_file =  "/".$upload_path.$file_name;
			}
		}

		Booking::where('id', $id_booking)
		->update(
			[
				$name => $uploaded_file,
			]
		);

		return $this->response([
			'file_name' => $file_name,
			'document' => $uploaded_file,
		]);
	}

	public function delete_document(Request $r) {

		$name = $r->get('name');
		$id_booking = $r->get('id_booking');

		Booking::where('id', $id_booking)
		->update(
			[
				$name => '',
			]
		);

		return $this->response([
		]);
	}

	public function change_visa_document(Request $r) {
		$id_visa = $r->get('id_visa') ?? '';
		$id_booking = $r->get('id_booking');

		Booking::where('id', $id_booking)
		->update(
			[
				'id_visa' => $id_visa,
			]
		);

		return $this->response([
		]);
	}

	public function change_innings_document(Request $r) {
		$innings = $r->get('innings');
		$id_booking = $r->get('id_booking');

		Booking::where('id', $id_booking)
		->update(
			[
				'innings' => $innings,
			]
		);

		return $this->response([
		]);
	}

	public function change_payment_document(Request $r) {
		$payment = $r->get('payment') ?? '';
		$id_booking = $r->get('id_booking');

		Booking::where('id', $id_booking)
		->update(
			[
				'payment' => $payment,
			]
		);

		return $this->response([
		]);
	}

	public function change_remainder_document(Request $r) {
		$remainder = $r->get('remainder') ?? '';
		$id_booking = $r->get('id_booking');

		Booking::where('id', $id_booking)
		->update(
			[
				'remainder' => $remainder,
			]
		);

		return $this->response([
		]);
	}

	public function sort_booking_by_departure (Request $r, Booking $booking_model) {
		$isSold = $r->get('isSold', false);

		$touragent = Auth::guard('touragent')->user();

		if (empty($touragent)) {
			abort(404);
		}
		
		if (!$isSold) {
			$booking_tours = $booking_model->get_booking_tours_for_touragent($touragent->id);
		} else {
			$booking_tours = $booking_model->get_sold_tour_for_touragent($touragent->id);
		}
		
		foreach ($booking_tours as $item) {
			
			$item->data_departure = $item->tour->data_departure;
		}

		$booking = $booking_tours->sortBy('data_departure');
		
		
		$booking_tours_component = new BookingTours($booking, $isSold);
		
		
		return $this->response([
			'html' => $booking_tours_component->render(),
		]);
	}

}
