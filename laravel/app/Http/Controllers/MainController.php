<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\RatesContract;

*/


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helpers\RatesContract;


class MainController extends Controller
{

	/*
    public function index()
    {
//плохой пример
    //	$hello= new HelpController();
    //	$who=$hello->index();
    }
*/


//нормальный пример
//public function index(HelpController $hello){
public function index(RatesContract $rates){
//echo Form::checkbox('name', 'value');
$rate=$rates->getRates();
return view('index',['rate'=>$rate]);
    // $name = $hello->index();

}

    public function FunctionName($value='')
    {
    	echo "string";
    }
    
}
