<?php

namespace App\Http\Controllers;
// подключаем штуку для работы с базой
use DB;
// подключаем модель
use App\Categories;
use App\Page;
use App\Posts;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class CategoryController extends Controller{

	public function index($slug=0) {
		# обращаемся к моделе Category
		$category_model=new Categories;
		$categories=$category_model->cats_for_header();

		# обращаемся к моделе Page
		$pages=new Page;
		$footer_pages=$pages->footer_pages();

		if ( isset($slug) && !empty($slug) )  {
			//категория есть, выводим по ней посты
			//тут нужно сначала проверить категорию и вытащить ее айди

			$cat_id = $category_model->select_cat($slug);
		
			$postsi = new Posts;
			$posts= $postsi->post_of_category($slug);

			return view('layouts.category_lay',[
   				'categories' => $categories,
   				'pages' => $footer_pages,
   				'content_layout' => 'posts_content',
   				'posts' => $posts
   				]);
		
		}else{
			//категория не указана, выводим список категорий
			// зделаем запрос на категорию с картинкой и количеством постов внем
			$posts=$category_model->cats_page();
			
			return view('layouts.categories_lay',[
   				'categories' => $categories,
   				'pages' => $footer_pages,
   				'content_layout' => 'posts_content',
   				'posts' => $posts
   				]);
		}

	// return view('layouts.default',['categories' => $categories]);
	}

}