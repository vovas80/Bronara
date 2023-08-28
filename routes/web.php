<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/sitemap.xml', 'SitemapController@index');

Route::get('/auth/facebook', 'TouristAuthController@redirect_to_facebook')->name('auth-facebook');
Route::get('/auth/facebook/callback', 'TouristAuthController@handle_facebook_callback');

Route::post('/api/login', 'TouristAuthController@login')->name('login');
Route::post('/api/register', 'TouristAuthController@register')->name('register');
Route::post('/api/sendcode', 'TouristAuthController@sendcode')->name('sendcode');
Route::post('/api/checkcode', 'TouristAuthController@checkcode')->name('checkcode');
Route::post('/api/changepassword', 'TouristAuthController@changepassword')->name('changepassword');
Route::post('/api/logout', 'TouristAuthController@logout')->name('logout');

Route::post('/api/save-tourist', 'TouristController@save_tourist')->name('save-tourist');
Route::post('/api/save-touragent', 'TouragentController@save_touragent')->name('save-touragent');
Route::post('/api/save-document-touragent', 'TouragentController@save_document_touragent')->name('save-document-touragent');
Route::post('/api/update-list-touragent', 'TouragentController@update_list_touragent')->name('update-list-touragent');
Route::post('/api/in-work-application', 'TouragentController@in_work_application')->name('in-work-application');

// Route::post('/api/add-tourist', 'TouristController@add_tourist')->name('add-tourist');

Route::post('/api/set-region', 'RegionController@set_region')->name('set-region');

Route::post('/api/login-touragent', 'TouragentAuthController@login')->name('login-touragent');
Route::post('/api/register-touragent', 'TouragentAuthController@register')->name('register-touragent');
Route::post('/api/sendcode-touragent', 'TouragentAuthController@sendcode')->name('sendcode-touragent');
Route::post('/api/checkcode-touragent', 'TouragentAuthController@checkcode')->name('checkcode-touragent');
Route::post('/api/changepassword-touragent', 'TouragentAuthController@changepassword')->name('changepassword-touragent');
Route::post('/api/logout-touragent', 'TouragentAuthController@logout')->name('logout-touragent');

Route::post('/api/send-callback-support', 'CallbackController@send_callback_support')->name('send-callback-support');
Route::post('/api/send-application', 'ApplicationController@send_application')->name('send-application');
Route::post('/api/delete-application', 'ApplicationController@delete_application')->name('delete-application');
Route::post('/api/show-application-for-touragent', 'ApplicationController@show_application_for_touragent')->name('show-application-for-touragent');

Route::post('/api/get-tour', 'ExchangeController@get_tour')->name('get-tour');

Route::post('/api/get-booking-tour', 'BookingController@get_booking_tour')->name('get-booking-tour');

Route::post('/api/save-status', 'BookingController@save_status')->name('save-status');
Route::post('/api/save-document', 'BookingController@save_document')->name('save-document');
Route::post('/api/delete-document', 'BookingController@delete_document')->name('delete-document');
Route::post('/api/change-visa-document', 'BookingController@change_visa_document')->name('change-visa-document');
Route::post('/api/change-innings-document', 'BookingController@change_innings_document')->name('change-innings-document');
Route::post('/api/change-payment-document', 'BookingController@change_payment_document')->name('change-payment-document');
Route::post('/api/change-remainder-document', 'BookingController@change_remainder_document')->name('change-remainder-document');

Route::post('/api/booking-tour', 'BookingController@booking_tour')->name('booking-tour');
Route::post('/api/send-booking-tour', 'BookingController@send_booking_tour')->name('send-booking-tour');
Route::post('/api/sort-booking-by-departure', 'BookingController@sort_booking_by_departure')->name('sort-booking-by-departure');

Route::post('/api/saved', 'SavedController@saved')->name('saved');
Route::post('/api/saved/clear', 'SavedController@clear')->name('saved-clear');

Route::group([
	'prefix' => Lang::prefix(),
	'middleware' => [
		\App\FastAdminPanel\Middleware\Lang::class,
		\App\FastAdminPanel\Middleware\Convertor::class,
		//\App\FastAdminPanel\Middleware\RedirectSEO::class,
	]
], function(){

	Route::get('/', 'PageController@index')->name('home');	
	Route::get('/contacts', 'PageController@contacts')->name('contacts');
	Route::get('/faq', 'PageController@faq')->name('faq');

	Route::any('/exchange/{slug?}', 'ExchangeController@exchange')->name('exchange')->where('slug', '.*');

	Route::get('/downloadPDF/{slug}','DownloadController@downloadPDF');
	Route::get('/downloadPDF-booking/{id}','DownloadController@downloadPDF_booking');

	Route::get('/tourist', 'TouristController@tourist')->name('tourist');
	Route::any('/tourist/tours', 'TouristController@tours')->name('tourist-tours');
	Route::get('/tourist/booking', 'TouristController@booking')->name('tourist-booking');
	Route::get('/tourist/document', 'TouristController@document')->name('tourist-document');
	Route::get('/tourist/application', 'TouristController@application')->name('tourist-application');

	Route::any('/touragent', 'TouragentController@touragent')->name('touragent');
	Route::any('/touragent/working', 'TouragentController@working')->name('touragent-working');
	Route::any('/touragent/booking', 'TouragentController@booking')->name('touragent-booking');
	Route::any('/touragent/sold', 'TouragentController@sold')->name('touragent-sold');

	Route::get('/{slug}', 'PageController@standart')->name('standart');

	Route::fallback(function () {
		return response()->view("errors.404")->setStatusCode(404);
	});
});