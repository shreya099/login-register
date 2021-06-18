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
//Route::group(['middleware' =>['auth']],function(){
// Auth::routes();

// Route::group(['middleware' =>['auth']],function(){

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
   Route::get('dish/add_img/{id}', 'DishController@addimg');
    Route::post('imgdata', 'DishController@imgdata');
   Route::get('add_img/del/{id}', 'DishController@del');
   Route::get('add_img/edit1/{id}', 'DishController@edit1');
    Route::get('show_all', 'FrontController@showall');
     Route::post('imgupdatedata', 'DishController@update1');
      Route::get('admin/banner', 'BannerController@index');
       Route::post('bannerdata', 'BannerController@submitdata');
   Route::get('banner/delete/{id}', 'BannerController@delete');
   Route::get('banner/edit/{id}', 'BannerController@edit');
   Route::post('banner/update', 'BannerController@update');
         Route::get('admin/about', 'AboutController@index');
          Route::post('aboutdata', 'AboutController@submitdata');
   Route::get('about/delete/{id}', 'AboutController@delete');
   Route::get('about/edit/{id}', 'AboutController@edit');
   Route::post('about/update', 'AboutController@update');
     Route::get('admin/allorder', 'OrderController@index');
     Route::get('submit-order','OrderController@submit');
      Route::get('submit-pay','OrderController@submit1');


//});
  
  Route::post('/paytm-callback', 'FrontController@paytmCallback');
   Route::get('front', 'FrontController@index');
   Route::get('dish/{id}', 'FrontController@showdish');
    Route::get('show_all', 'FrontController@showall');
     Route::get('detail/{id}', 'FrontController@showdetail');
      Route::get('cart', 'FrontController@cart');
      Route::post('add_to','FrontController@addtocart');
      Route::get('register1','FrontController@register');
 
        Route::get('user_r','UserController@user');
        // Route::post('savereg','UserController@userinsert');
         Route::get('user_login','UserController@userlogin');
         Route::post('user-login','UserController@logininsert');
           Route::get('logout1','UserController@logout1');
           Route::post('savereg','UserController@registerusers');
           Route::match(['get', 'post'], '/confirm/{code}','UserController@confirmAccount');


            Route::get('checkout','FrontController@checkout');
             Route::get('cart/update_q/{id}/{dish_quantity}','FrontController@update_q');
              Route::post('placeorder','FrontController@placeorder');
              Route::get('thanks','FrontController@thanks');
              // Route::get('front.search','FrontController@search');

               


Route::group(['middleware' =>['frontlogin']],function(){
  Route::get('my','FrontController@my');
                   Route::get('yourorder/{id}','FrontController@yourorder');  
});
Route::get('front/dashboard', 'ForgotPasswordController@index');
Route::get('/forget-password', 'ForgotPasswordController@getEmail');
Route::post('/forget-password', 'ForgotPasswordController@postEmail');
Route::get('{token}/reset-password', 'ResetPasswordController@getPassword');
Route::post('/reset-password', 'ResetPasswordController@updatePassword');

 Route::get('auth/google', 'UserController@redirectToGoogle');
 Route::get('oauth/callback/google', 'UserController@handleGoogleCallback'); 
   Route::get('auth/github', 'UserController@redirectToGithub');
 Route::get('oauth/callback/github', 'UserController@handleGithubCallback'); 
Route::get('/search','FrontController@search_item');


Route::get('/clear', function() { 
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');
        Artisan::call('route:clear'); 
        return "Cleared!"; 
    });




   






