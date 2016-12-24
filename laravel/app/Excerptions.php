<?php 
namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Excerptions extends Model{
	public function index($ex_id){
		$ex = DB::table('excerptions')
		->select('excerption_id','excerption_text','excerption_author')
		->where('excerption_id', $ex_id)
		->get();
		return $ex;
	}

}