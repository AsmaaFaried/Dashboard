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



//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/redirect/{service}','SocialiteController@redirect');
//Route::get('/callback/{service}','SocialiteController@callback');
//Route::get('/fillable','CrudController@getOffers');
//Route::group(['prefix'=>'offers'],function(){
////    Route::get('store','CrudController@store');
//    Route::get('create','CrudController@create');
//    Route::post('store','CrudController@store')->name('offers.store');
//
//
//});

Route::get('/','DashboardController@home')->name('home');


Route::group(['prefix'=>'Dashboard'],function(){
    Route::get('index','DashboardController@index')->name('index');
    Route::get('layout-sidenav-light','DashboardController@sidenav')->name('light-sidenav');
    Route::get('layout-static','DashboardController@staticc')->name('static');
    Route::get('charts','DashboardController@charts')->name('charts');
    Route::get('401','DashboardController@pageOne')->name('401');
    Route::get('404','DashboardController@pageTwo')->name('404');
    Route::get('500','DashboardController@pageThree')->name('500');
    Route::get('tables','DashboardController@tables')->name('tables');


});

Route::group(['prefix'=>'Dashboardd'],function (){

    Route::get('login','DashboardController@login')->name('login');
    Route::post('welcome','DashboardController@welcome')->name('welcome');
    Route::get('register','DashboardController@register')->name('register');
    Route::get('forget-password','DashboardController@forgetPassword')->name('forget-password');

});

