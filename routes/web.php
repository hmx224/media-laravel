<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/','控制器@方法');
//后边再分组
//Route::namespace('App\Http\Controllers')->group(['prefix'=>'articles'],function(){
    //文章列表
    Route::get('articles','ArticleController@index');
    //创建文章
    Route::get('articles/create','ArticleController@create');
    Route::post('articles','ArticleController@store');

    //文章详情
    Route::get('articles/{article}','ArticleController@show');

    //编辑文章
    Route::get('articles/{article}/edit','ArticleController@edit');
    Route::put('articles/{article}','ArticleController@update');
    //删除文章
    Route::post('articles/delete/{article}','ArticleController@delete');
    //图片上传
    Route::post('articles/image/upload','ArticleController@imageUpload');

//});
