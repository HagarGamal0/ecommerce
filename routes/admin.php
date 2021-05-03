<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


  Route::group(['namespace'=>'Dashboard' , 'middleware'=>'auth:admin' , 'prefix'=>'admin'] ,function(){

      Route::get('/', 'DashboardController@index' )->name('admin.dashboard');




    Route::prefix('setting')->group(function () {

          Route::get('shipping-methods/{type}', 'SettingController@editShippingMethods' )->name('edit.shippings.method');

          Route::put('shipping-methods/{id}', 'SettingController@updateShippingMethods' )->name('update.shippings.method');




  });

    });


 Route::group(['namespace'=>'Dashboard' ,  'middleware'=>'guest:admin' ,'prefix'=>'admin'] ,function(){


  Route::get('login', 'LoginController@login' )->name('admin.login');

    Route::post('login', 'LoginController@savelogin' )->name('save.admin.login');

   });



});
