<?php namespace App\Http\Controllers;
use App\News;
use App\Category;
use App\Menu;
use App\Contact;
use App\Introduce;
use Session;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	public function index(){					
		if (!Session::has('lang')) {
			Session::put('lang', 'vn');
			$lang = "vn";
		}
		$lang = Session::get('lang');
		$data = Menu::getLanguage($lang);
		return view('index',$data);
	}

	public function vn(){					
		Session::forget('lang');
		Session::put('lang', 'vn');
		$data = Menu::getLanguage('vn');
		return view('index',$data);
	}

	public function english(){					
		Session::forget('lang');
		Session::put('lang', 'eng');
		$data = Menu::getLanguage('eng');
		return view('index',$data);
	}


	public function news(){
		if (!Session::has('lang')) {
			Session::put('lang', 'vn');
			$lang = "vn";
		}
		$lang = Session::get('lang');
		$data = Menu::getLanguage($lang);
		return view('pages.news',$data);
	}

	public function introduce(){
		if (!Session::has('lang')) {
			Session::put('lang', 'vn');
			$lang = "vn";
		}
		
		$lang = Session::get('lang');
		$data = Introduce::getLanguage($lang);
		return view('pages.introduce',$data);
	}


	public function chuyen_nganh(){
		if (!Session::has('lang')) {
			Session::put('lang', 'vn');
			$lang = "vn";
		}
		$lang = Session::get('lang');
		$data = Menu::getLanguage($lang);
		return view('pages.chuyen_nganh',$data);
	}
	public function post_chuyen_nganh(){
		return view('admin/');
	}

	public function giao_tiep(){
		if (!Session::has('lang')) {
			Session::put('lang', 'vn');
			$lang = "vn";
		}
		$lang = Session::get('lang');
		$data = Menu::getLanguage($lang);
		return view('pages.giao_tiep',$data);
	}

	public function contact(){
		if (!Session::has('lang')) {
			Session::put('lang', 'vn');
			$lang = "vn";
		}
	
		$lang = Session::get('lang');
		$data = Contact::getLanguage($lang);
		return view('pages.contact',$data);
	}


}
