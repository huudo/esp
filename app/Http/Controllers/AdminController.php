<?php namespace App\Http\Controllers;
use App\News;
// use App\Category;
// use App\Menu;
// use App\Contact;
// use App\Introduce; 
use Input;

use Session;

class AdminController extends Controller {
	public function news(){
		$data['news'] = News::getNews();
		return view('admin.news',$data);
	}

	public function create_news(){

		return view('admin.create_news');
	}

	public function post_create_news(){
		$input = Input::all();    
		$news = new News;
		$news -> tittle_vietnam	 = $input['vn_tittle'];
		$news -> tittle_english	 = $input['eng_tittle'];
		$news -> vietnam = $input['vietnam'];
		$news -> english = $input['english'];

		$news -> save();
		return redirect('admin/news');
	}
}