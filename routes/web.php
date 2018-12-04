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


Route::get('/more_new','Home\HomeController@more_new');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    //后台登陆
    Route::get('/login', 'LoginController@index');//lzh
    Route::post('/login', 'LoginController@login')->name('login');//lzh
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'LoginCheck'], function () {
    Route::get('/','IndexController@index');
    Route::get('index','IndexController@index');
    Route::get('logout','LoginController@logout');
    //修改密码
    Route::get('reset','LoginController@reset');//lzh
    Route::post('reset','LoginController@change');//lzh
    Route::resource('user','UserController');//lzh
    Route::resource('link','LinkController');//武志祥
    Route::resource('imageNew','ImageNewController');//武志祥
    Route::get('/ImageNewUp/{id}','ImageNewController@up');
    Route::get('/imageNewDown/{id}','ImageNewController@down');
    Route::get('imageNewShow/{id}', 'ImageNewController@isShow');//武志祥

    Route::resource('newType', 'NewTypeController');//武志祥
    Route::resource('new', 'NewController');//武志祥
    Route::resource('slide', 'SlideController');//武志祥
    Route::get('slideUp/{id}', 'SlideController@up');//武志祥
    Route::get('slideDown/{id}', 'SlideController@down');//武志祥
    Route::get('slideShow/{id}', 'SlideController@isShow');//武志祥
    Route::resource('page', 'PageController');//武志祥
    Route::get('/webinformation', ['as' => 'webinformation', 'uses' => 'WebInformationController@index']);
    //网站信息保存
    Route::post('/webinformation', ['as' => 'webinformation', 'uses' => 'WebInformationController@store']);
    Route::resource('banner','BannerController');//武志祥
    Route::get('bannerUp/{id}','BannerController@up');//武志祥
    Route::get('bannerDown/{id}','BannerController@down');//武志祥
    Route::get('bannerShow/{id}','BannerController@isShow');//武志祥
    Route::resource('indexColumn','IndexColumnController');//武志祥
});
Route::group(['prefix'=>'','namespace'=>'Home'],function (){
    Route::get('newtype/{id}','NewController@newtype');
    Route::resource('news','NewController');
    Route::resource('imagenews','NewImageController');
    Route::get('/{url}','HomeController@banner');
    Route::get('/', 'HomeController@index');//武志祥
    Route::post('/search', 'HomeController@search');//武志祥
});
