<?php

namespace App\Http\Controllers;
// подключаем штуку для работы с базой
use DB;
// подключаем модель
use App\Categories;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Categories $rates, PostsController $posts)    {
        //обращение к моделе категорий
        //загрузка шапки
        $categories = $rates->cats_for_header();

        //загрузка последних постов
        //$content = $posts->get posts();
       
       //пагинация 

       //футер 
        
        # обращаемся к моделе Category
//$vrode_model = new Categories;
       // $categories = $vrode_model->cats_for_header();
dd($categories);

        //загрузка 
        return view('index');
    }
}
