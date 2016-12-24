<?php

namespace App\Http\Controllers;
// подключаем штуку для работы с базой
use DB;
// подключаем модель
use App\Categories;
use App\Page;
use App\Excerptions;
use Input;
use Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class TestController extends Controller{

	public function ajax(){
	// Getting all post data
    if(Request::ajax()) {
      $data = Input::all();
      print_r($data);die;
    }
	}
	
	
	
	
	
	public function index($id=0){
		# обращаемся к моделе Category
		$vrode_model=new Categories;
		$categories=$vrode_model->cats_for_header();

		# обращаемся к моделе Page
		$pages=new Page;
		$footer_pages=$pages->footer_pages();

		if ($id==0 || empty($id)) {
			//Нету номера выводим рандомную цытату
			$ex_id=(mt_rand(1,366));
		}else{
			// выведем цытату с номером в заросе
			if ($id>366 || $id<=0 ) {
				return view('errors.404');
			}
	 		$ex_id=$id;
		}

		$excerptions_model=new Excerptions;
		$ex=$excerptions_model->index($ex_id);

		return view('layouts.default',[
			'categories' => $categories,
			'pages' => $footer_pages,
			'ex'=>$ex,
			'content_layout'=>'ex_content'
			]);
	}

}