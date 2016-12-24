<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});

*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::get('/','HomeController@index');




# главная страница Posts->index
# или c указанием алиасов
# get('/',['as'=>'posts','user'=>'PostsController@index']);
/*******************///Route::get('/','PostsController@index');
//Route::get('/admin','AdminController@index');

# текущая категория
Route::get('/category','CategoryController@index');
#красивый вывод категорий с количеством постов
Route::get('/category/{slug}','CategoryController@index');

//Route::get('/excerption','ExcerptionController@index');
Route::get('/excerptions','ExcerptionsController@index');
Route::post('/excerptions','ExcerptionsController@ajax');
Route::get('/excerptions/{id}','ExcerptionsController@index')->where('id', '[0-9]+');

Route::get('/page/{slug}','PageController@index');



#Route::get('/test','TestController@index');
Route::get('/test','TestController@index');
Route::post('/test','TestController@ajax');

Route::get('/p/{id}','PostController@short_url')
->where(['id' => '[0-9]+']);

Route::get('/post/{year}','PostController@post_year')
->where(['year' => '[2][0]\d{2}','month' => '[0]?[1-9]|[1][0-2]']);

Route::get('/post/{year}/{month}','PostController@post_month')
->where(['year' => '[2][0]\d{2}','month' => '[0]?[1-9]|[1][0-2]']);

Route::get('/post/{year}/{month}/{day}','PostController@post_day')
->where(['year' => '[2][0]\d{2}','month' => '[0]?[1-9]|[1][0-2]','day' => '[0]?[1-9]|[1-2][0-9]|[3][0-1]']);

Route::get('/post/{year}/{month}/{day}/{slug}','PostController@post')
//год 20** месяц: 1-12  день: 1-31
->where(['year' => '[2][0]\d{2}','month' => '[0]?[1-9]|[1][0-2]','day' => '[0]?[1-9]|[1-2][0-9]|[3][0-1]']);



#Route::get('/post/{id}','PostController@index');

// STATIC PAGES
Route::get('about', function() {
	return view('pages.about');
});

Route::get('reklama', function () {
	return view('pages.reklama');
});

Route::get('special', function () {
	 return view('pages.special');
});
Route::get('be_author', function () {
	 return view('pages.co_author');
});