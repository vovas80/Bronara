<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tour;
use App\Models\Booking;

use PDF;
use Dompdf\Options;


class DownloadController extends Controller
{
	public function downloadPDF ($slug, Tour $model_tour) {
		
		$tour = $model_tour->get_tour_by_slug($slug);

		$pdf = PDF::loadView('pages.pdf.tour', compact('tour'));

        return $pdf->download($tour->slug.'.pdf');
	}	

	public function downloadPDF_booking ($id_booking, Tour $model_tour) {

		$slug = Booking::where('id', $id_booking)->first()->tour->slug;
		$tour = $model_tour->get_tour_by_slug($slug);
		
		$tour->peoples = Booking::where('id', $id_booking)->first()->people;
		$tour->status = Booking::where('id', $id_booking)->first()->status;
		$tour->tourist = Booking::where('id', $id_booking)->first()->tourist;

		$pdf = PDF::loadView('pages.pdf.booking', compact('tour'));

        return $pdf->download($tour->slug.'.pdf');
	}	

}