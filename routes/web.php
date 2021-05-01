<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


  Route::get('/', 'AuthController@index');
  Route::post('submit-login', 'AuthController@submitLogin'); 
  Route::get('registration', 'AuthController@registration');
  Route::post('submit-registration', 'AuthController@submitRegistration'); 
  Route::get('admin/dashboard', 'AuthController@dashboard'); 
  Route::get('logout', 'AuthController@logout');


   Route::get('admin/category', 'CategoryController@index');
   Route::post('submitdata', 'CategoryController@submitdata');
   Route::get('admin/display', 'CategoryController@display');
   Route::get('admin/delete/{id}', 'CategoryController@delete');
   Route::get('admin/edit/{id}', 'CategoryController@edit');
   Route::post('admin/update', 'CategoryController@update');
    Route::get('admin/delivery', 'DeliveryController@index');
   Route::post('submit-data', 'DeliveryController@submitdata');
    Route::get('delivery/delete/{id}', 'DeliveryController@delete');
    Route::get('delivery/edit/{id}', 'DeliveryController@edit');
    Route::post('delivery/update', 'DeliveryController@update');
     Route::get('admin/coupon', 'CouponController@index');
    Route::post('insert-data', 'CouponController@insertdata');
   Route::get('coupon/delete/{id}', 'CouponController@delete');
    Route::get('coupon/edit/{id}', 'CouponController@edit');
   Route::post('coupon/update', 'CouponController@update');
    Route::get('admin/dish', 'DishController@index');
    Route::post('insertdata', 'DishController@insertdata');
   Route::get('dish/delete/{id}', 'DishController@delete');
   Route::get('dish/edit/{id}', 'DishController@edit');
   Route::post('dish/update', 'DishController@update');
   






   






