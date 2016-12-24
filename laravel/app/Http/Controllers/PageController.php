<?php

namespace App\Http\Controllers;
// подключаем штуку для работы с базой
use DB;
// подключаем модель
use App\Categories;
use App\Page;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class PageController extends Controller{

	public function index($slug){
		# обращаемся к моделе Category
		$vrode_model=new Categories;
		$categories=$vrode_model->cats_for_header();
		
		// проверка на правильнось данных
		/*
		$post = DB::table('pages')
		->where('slug', '=', "$slug")
		
		->get();
		*/
		
		# обращаемся к моделе Page
		$pages=new Page;
		$footer_pages=$pages->footer_pages();

		$post=$pages->page_text($slug);
   		return view('layouts.page_lay',[
   			'categories' => $categories,
   			'pages' => $footer_pages,
   			'content_layout' => 'post_content',
   			'post' => $post
   			]);
	}
}