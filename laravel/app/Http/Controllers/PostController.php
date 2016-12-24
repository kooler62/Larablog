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


class PostController extends Controller{

	public function post($year,$month,$day,$slug){
		# обращаемся к моделе Category
		$vrode_model=new Categories;
		$categories=$vrode_model->cats_for_header();
		
		// проверка на правильнось данных
		$posts_model=new Posts;
		$post = $posts_model->post($slug);
		
		# обращаемся к моделе Page
		$pages=new Page;
		$footer_pages=$pages->footer_pages();

		# получим ссылку на следующий/предидущий пост
		$post_prew_next=$posts_model->post_prew_next($post[0]->post_id);
		//$post_prew_next=[5,6];

   		return view('layouts.post_lay',[
   			'categories' => $categories,
   			'pages' => $footer_pages,
   			'content_layout' => 'post_content',
   			'post' => $post,
   			'post_prew_next'=>$post_prew_next
   			]);
	}

	


	public function short_url($id){
		$posts_model = new Posts;
		$post=$posts_model->short_url($id);
		return redirect($post);
	}


	public function post_day($year,$month,$day){
		// возвращаем посты за month

		# обращаемся к моделе Category
		$Categories=new Categories;
		$categories=$Categories->cats_for_header();
		
		# обращаемся к моделе Page
		$pages=new Page;
		$footer_pages=$pages->footer_pages();

		$Posts_model=new Posts;
		$posts=$Posts_model->post_of_day($year,$month,$day);
		return view('layouts.default',[
   				'categories' => $categories,
   				'pages' => $footer_pages,
   				'content_layout' => 'posts_content',
   				'posts' => $posts]);
	}

	public function post_month($year,$month){
		// возвращаем посты за month

		# обращаемся к моделе Category
		$Categories=new Categories;
		$categories=$Categories->cats_for_header();

		# обращаемся к моделе Page
		$pages=new Page;
		$footer_pages=$pages->footer_pages();

		$Posts_model=new Posts;
		$posts=$Posts_model->post_of_month($year,$month);
		return view('layouts.default',[
   				'categories' => $categories,
   				'pages' => $footer_pages,
   				'content_layout' => 'posts_content',
   				'posts' => $posts]);
	}

	public function post_year($year){
		// возвращаем посты за year

		# обращаемся к моделе Category
		$Categories=new Categories;
		$categories=$Categories->cats_for_header();

		# обращаемся к моделе Page
		$pages=new Page;
		$footer_pages=$pages->footer_pages();

		$Posts_model=new Posts;
		$posts=$Posts_model->post_of_year($year);

		return view('layouts.default',[
   				'categories' => $categories,
   				'pages' => $footer_pages,
   				'content_layout' => 'posts_content',
   				'posts' => $posts]);
	}



}