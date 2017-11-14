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


/**-------------------------------------------for test your code-------------------------------------**/
//Route::get('test', function () {});
/**--------------------------------------------------------------------------------**/



//process routes
Route::post('register', 'Auth\RegisterController@register');
Route::get('logout', 'Auth\LoginController@logout');
Route::post('login', 'Auth\LoginController@login');


//changeLanguage users
Route::get('changeLang/{lang}', 'Admin\LangController@changeLang');


//admin routes
Route::get('administrator', 'Auth\LoginController@showLoginForm');

Route::group(['prefix'=>'admin/{lang?}','middleware'=>['admin','validateLang']],function (){
    Route::get('/', 'AdminController@index');

    Route::resource('hotel', 'Admin\HotelController');
    Route::resource('hotelfacilities','Admin\HotelfacilitiesController');

    Route::resource('city', 'Admin\CityController');
    Route::post('city/filter', 'Admin\CityController@filter');
    Route::resource('language', 'Admin\LangController');
    Route::resource('packageservices','Admin\PackageservicesController');
    Route::resource('package','Admin\PackageController');
    Route::post('package/filter','Admin\PackageController@filter');
    Route::post('uploadimgpackage/{tmptime}','Admin\PackageController@uploadimg');
    Route::post('deletimgpackage','Admin\PackageController@deletimg');
    Route::post('mainbuploadimgpackage/{tmptime}','Admin\PackageController@mainuploadimg');
    Route::post('maindeletimgpackage','Admin\PackageController@maindeletimg');

    Route::resource('article','Admin\ArticleController');
    Route::post('article/filter','Admin\ArticleController@filter');
    Route::post('uploadimgarticle/{tmptime}','Admin\ArticleController@uploadimg');
    Route::post('deletimgarticle','Admin\ArticleController@deletimg');
    Route::post('mainbuploadimgarticle/{tmptime}','Admin\ArticleController@mainuploadimg');
    Route::post('maindeletimgarticle','Admin\ArticleController@maindeletimg');





});



Route::group(['prefix' => '{lang?}','middleware'=>['auth','validateLang']],function() {


Route::resource('profile','ProfileController');


Route::get('voucher','SiteController@voucher');
Route::get('attractions','SiteController@attractions');
    Route::resource('profile','ProfileController');
    Route::get('voucher','SiteController@voucher');
    Route::get('attractions','SiteController@attractions');



});


//related to multi language routes
Route::group(['prefix' => '{lang?}', 'middleware' => 'validateLang'], function () {
    Route::get('/', 'SiteController@index')->name("home");
    Route::get('list', 'SiteController@liste');
    Route::get('package', 'SiteController@package');
    Route::get('hotelList', 'SiteController@hotelList');
    Route::get('hotelDetiles', 'SiteController@hotelDetiles');
    Route::get('reserve', 'SiteController@reserve');
    Route::get('pay', 'SiteController@pay');
    Route::get('contact', 'SiteController@contact');
    Route::get('login', 'Auth\LoginController@showlogin');
    Route::get('register', 'Auth\RegisterController@showregister');



//    Route::get('run','LangController@store');
});