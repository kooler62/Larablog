<?php 
namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model{
	//указываем таблицу
	protected $table = 'categories';
	//указываем первичный ключ
	protected $primaryKey = 'cat_id';



	public function cats_for_header(){
		$categories = DB::table('categories')
		->select('name','cat_url')
		->where('cat_visibility', 1)
		->orderBy('order')
		->get();
		return $categories;
	}


/*
	public function cats_for_header(){
		$categories = DB::table('categories')
		->select('cat_title','cat_url')
		->where('cat_visibility', 1)
		->orderBy('cat_position')
		->get();
		return $categories;
	}
*/	
	public function cats_page(){
		$categories= DB::table('categories')
		->select('cat_title','cat_url','cat_img')
		->where('cat_visibility', 1)
		->orderBy('cat_position')
		->get();
		return $categories;
	}


	public function select_cat($slug){
		$categories= DB::table('categories')
		->select('cat_id','cat_title','cat_url','cat_img')
		->where('cat_visibility', 1)
		->where('cat_altname', $slug)
		->get();

		if (empty($categories)) {
			//такой категории нет
			abort(404);
		}
		return $categories;
	}

}