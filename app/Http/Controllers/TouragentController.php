<?php

namespace App\Http\Controllers;

use App\View\Components\Inc\Pagination;
use App\View\Components\Touragent\Applications;
use Illuminate\Http\Request;
use App\Models\Touragent;
use App\Models\Application;
use App\Models\TouragentApplication;
use App\Models\Booking;
use Auth;

class TouragentController extends Controller
{
	public $pagesize = 2;

    public function touragent (Request $r, Application $application_model) {

		$route = $r->route()->getName();

		$touragent = Auth::guard('touragent')->user();

		if (empty($touragent)) {
			abort(404);
		}

		$page = $r->get('page-modal', 1);
		$paglink = route('touragent', [], false);

		$id_applications = TouragentApplication::where('id_touragents', $touragent->id)->get()->pluck('id_applications');

		$query = Application::whereNotIn('id', $id_applications)->where('show', 0)->where('date', '<=', $touragent->date_update);
	
		$count = $query->count();

		$applications = $query->skip(($page - 1) * $this->pagesize)
		->limit($this->pagesize)
		->get();

		if ($r->isMethod('post')) {

			if ($r->get('pageparam') == 'page-modal') {
				return $this->paginatePost($page, $paglink, $count, false, $applications, 'page-modal');
			}
		}

		return view('pages.touragent', [
			'route'			=> $route,
			'page'			=> $page,
			'count'			=> $count,
			'pagesize'		=> $this->pagesize,
			'paglink'		=> $paglink,
			'touragent'		=> $touragent,
			'applications'  => $applications
		]); 

	}

	public function update_list_touragent(Request $r) {
		$route = $r->route()->getName();

		$touragent = Auth::guard('touragent')->user();

		Touragent::where('id', $touragent->id)
		->update([
			'date_update' => date('Y-m-d H:i:s'),
		]);

		if (empty($touragent)) {
			abort(404);
		}

		$page = $r->get('page', 1);
		$paglink = route('touragent', [], false);

		$query = Application::where('show', 0)->where('date', '<=', $touragent->date_update);

		$count = $query->count();

		$applications = $query->skip(($page - 1) * $this->pagesize)
		->limit($this->pagesize)
		->get();


		return $this->paginatePost($page, $paglink, $count, false, $applications);

	}

	public function save_touragent(Request $r) {

		$name = $this->filter_formdata($r->get('name'));
		$email = $this->filter_formdata($r->get('email'));
		$phone = $this->filter_formdata($r->get('phone'));
		$company = $this->filter_formdata($r->get('company'));
		$address = $this->filter_formdata($r->get('address') ?? '');
		$work = $this->filter_formdata($r->get('work') ?? '');
		$license = $this->filter_formdata($r->get('license') ?? '');
		$photo = $r->file('photo') ?? '';

		$touragent = Touragent::where('id', Auth::guard('touragent')->id())
		->first();

		$uploaded_photo = '';
		if(!empty($photo)) {
			$upload_path = "photos/1/agent/";
			$photo = $r->file('photo');
			if ($photo != null) {
				$photo_name = time() . "1." . $photo->getClientOriginalExtension();
				$photo->move($upload_path, $photo_name);
				$uploaded_photo =  "/".$upload_path.$photo_name;
			}
		}

		$touragent->name = $name;
		$touragent->email = $email;
		$touragent->work = $work;
		$touragent->license = $license;
		$touragent->company = $company;
		$touragent->phone = $phone;
		$touragent->address = $address;
		$touragent->photo = $uploaded_photo;

		$touragent->save();
		return $this->response();
	}

	public function save_document_touragent(Request $r) {

		$touragent = Touragent::where('id', Auth::guard('touragent')->id())
		->first();

		$uploaded_photos = $r->get('photos', []);

		foreach ($r->file('documents', []) as $document){

			$uploaded_photo = '';
			if(!empty($document)) {
				$upload_path = "photos/1/documents/";
				$photo = $document;
				if ($photo != null) {
					$photo_name = time(). rand(0, 9999) . "1." . $photo->getClientOriginalExtension();

					$photo->move($upload_path, $photo_name);
					$uploaded_photo =  "/".$upload_path.$photo_name;
				}
			}
			$uploaded_photos[] = $uploaded_photo;
		}

		$touragent->documents = json_encode($uploaded_photos);

		$touragent->save();

		return $this->response();
	}

	public function in_work_application(Request $r, Touragent $touragent_model) {

		$touragent = Auth::guard('touragent')->user();

		if (empty($touragent)) {
			abort(404);
		}

		$id_application = $r->get('id_application');

		$touragent_application = new TouragentApplication();
		$touragent_application->id_applications = $id_application;
		$touragent_application->id_touragents = $touragent->id;
		$touragent_application->save();

		//рендер заявок в заявки на тур

		return $this->response();
	}

	public function working (Request $r) {
		$route = $r->route()->getName();

		$touragent = Auth::guard('touragent')->user();

		if (empty($touragent)) {
			abort(404);
		}

		$page = $r->get('page-modal', 1);
		$paglink = route('touragent-working', [], false);

		$id_applications = TouragentApplication::where('id_touragents', $touragent->id)->get()->pluck('id_applications');

		$query = Application::whereNotIn('id', $id_applications)->where('show', 0)->where('date', '<=', $touragent->date_update);

		$count = $query->count();

		$applications = $query->skip(($page - 1) * $this->pagesize)
		->limit($this->pagesize)
		->get();

		// dd($applications);

		$page_work = $r->get('page', 1);

		$query_application_work = Application::whereIn('id', $id_applications)->where('show', 0)->where('date', '<=', $touragent->date_update);

		$count_application_work = $query_application_work->count();

		$applications_work = $query_application_work->skip(($page_work - 1) * $this->pagesize)
		->limit($this->pagesize)
		->get();

		if ($r->isMethod('post')) {

			if ($r->get('pageparam') == 'page') {
				return $this->paginatePost($page_work, $paglink, $count_application_work, false, $applications_work);
			}

			if ($r->get('pageparam') == 'page-modal') {
				return $this->paginatePost($page, $paglink, $count, false, $applications, 'page-modal');
			}
		}

		

		return view('pages.touragent', [
			'route'		   				=> $route,
			'count'		   				=> $count,
			'pagesize'	   				=> $this->pagesize,
			'paglink'	   				=> $paglink,
			'touragent'    				=> $touragent,
			'applications' 				=> $applications,
			'page'		   				=> $page,
			'page_work'		   			=> $page_work,
			'applications_work' 		=> $applications_work,
			'count_application_work' 	=> $count_application_work, 
			
		]); 
	}

	public function booking (Request $r, Booking $booking_model) {

		$route = $r->route()->getName();

		$touragent = Auth::guard('touragent')->user();

		if (empty($touragent)) {
			abort(404);
		}

		$booking_tours = $booking_model->get_booking_tours_for_touragent($touragent->id);

		$page = $r->get('page-modal', 1);
		$paglink = route('touragent', [], false);

		$id_applications = TouragentApplication::where('id_touragents', $touragent->id)->get()->pluck('id_applications');

		$query = Application::whereNotIn('id', $id_applications)->where('show', 0)->where('date', '<=', $touragent->date_update);
	
		$count = $query->count();

		$applications = $query->skip(($page - 1) * $this->pagesize)
		->limit($this->pagesize)
		->get();

		if ($r->isMethod('post')) {

			if ($r->get('pageparam') == 'page-modal') {
				return $this->paginatePost($page, $paglink, $count, false, $applications, 'page-modal');
			}
		}


		return view('pages.touragent', [
			'route'			=> $route,
			'page'			=> $page,
			'count'			=> $count,
			'pagesize'		=> $this->pagesize,
			'paglink'		=> $paglink,
			'touragent'		=> $touragent,
			'applications' 	=> $applications,
			'booking_tours' => $booking_tours,
		]); 
	}

	public function sold (Request $r, Booking $booking_model) {

		$route = $r->route()->getName();

		$touragent = Auth::guard('touragent')->user();

		if (empty($touragent)) {
			abort(404);
		}

		$booking_tours = $booking_model->get_sold_tour_for_touragent($touragent->id);

		$page = $r->get('page', 1);
		$paglink = route('touragent', [], false);

		$query = Application::where('show', 0)->where('date', '<=', $touragent->date_update);

		$count = $query->count();

		$applications = $query->skip(($page - 1) * $this->pagesize)
		->limit($this->pagesize)
		->get();

		if ($r->isMethod('post')) {

			return $this->paginatePost($page, $paglink, $count, false, $applications);
		}
		
		return view('pages.touragent', [
			'route'		=> $route,
			'page'		=> $page,
			'count'		=> $count,
			'pagesize'	=> $this->pagesize,
			'paglink'	=> $paglink,
			'touragent'	=> $touragent,
			'applications' => $applications,
			'booking_tours' => $booking_tours
		]); 
	}

	private function paginatePost($page, $paglink, $count, $isWorking = false, $items = [], $pageparam = 'page') {
		
		$applications_component = new Applications($isWorking, $items);
		$pagination_component = new Pagination($count, $this->pagesize, $page, $paglink, false, $pageparam);

		return $this->response([
			'html'			=> $applications_component->render(),
			'pagination'	=> $pagination_component->render(),
		]);

	}

	private function filter_formdata($value){
		if ($value === 0)
		  return 0;
		
		if ($value)
		  return $value;
	
		return '';
	  }
	
}
