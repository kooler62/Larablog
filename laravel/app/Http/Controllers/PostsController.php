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

class PostsController extends Controller{

	public function index(){
		# обращаемся к моделе Category
		$vrode_model = new Categories;
		$categories = $vrode_model->cats_for_header();


		# обращаемся к моделе Page
	//	$pages = new Page;
	//	$footer_pages=$pages->footer_pages();


		//Получение разбитого на страницы запроса из базы данных:
	/*$postsi = new Posts;
		$per_page = 10;
		$posts = $postsi->post_paginate($per_page);
   		return view('layouts.default',[
   				'categories' => $categories,
   				'pages' => $footer_pages,
   				'content_layout' => 'posts_content',
   				'posts' => $posts]);*/
	}


}