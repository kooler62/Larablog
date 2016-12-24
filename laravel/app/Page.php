<?php 
namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Page extends Model{
	//указываем таблицу
	protected $table = 'pages';
	//указываем первичный ключ
	protected $primaryKey = 'id';
	//public $kooko='555';


	public function footer_pages(){
		# code...
		$footer_pages = DB::table('pages')
		->select('title','slug')
		->where('visibility', 1)
		->orderBy('position')
		->get();
		return $footer_pages;
		//return '55';
		//->orderBy('date', 'desc')
	}
	

	public function page_text($page){
		# code...
		//$footer_pages = DB::select('select title,slug,text from pages where visibility = 1 and slug='.$page);
		$footer_pages = DB::table('pages')
		->where('visibility', 1)
		->where('slug','=', $page)
		->orderBy('position', 'desc')
		->get();
		//->first();
		//dd($footer_pages);

//echo "<pre>";
//var_dump($footer_pages);

		return $footer_pages;
		//return '55';
	}
}