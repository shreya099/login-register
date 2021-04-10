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
  Route::get('dashboard', 'AuthController@dashboard'); 
  Route::get('logout', 'AuthController@logout');