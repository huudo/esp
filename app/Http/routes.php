<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Route::get("/{lang}",['as' => 'home', 'uses' => 'HomeController@index']);


// Route::get("/news",['uses' => 'HomeController@news']);
Route::get("/",['uses' => 'HomeController@index']);

Route::get("/eng",['uses' => 'HomeController@english']);

Route::get("/vn",['uses' => 'HomeController@vn']);


Route::get("/news",['uses' => 'HomeController@news']);

Route::get("/introduce",['uses' => 'HomeController@introduce']);

Route::get("/chuyen_nganh",['uses' => 'HomeController@chuyen_nganh']);

Route::post("/chuyen_nganh",function(){
	echo "a";
});

Route::get("/giao_tiep",['uses' => 'HomeController@giao_tiep']);

Route::get("/contact",['uses' => 'HomeController@contact']);



//===========================ADMIN ROUTE====================================


Route::group(['prefix' => 'admin'], function()
{
    Route::get('/', function()
    {
        return view('admin.index');
    });

    Route::get("/news",['uses' => 'AdminController@news']);

    Route::get("/news/create_news",['uses' => 'AdminController@create_news']);
    Route::post("/news/create_news",['uses' => 'AdminController@post_create_news']);
 
 
});