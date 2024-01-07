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


Route::group(['prefix'=>'user','namespace'=>'user'],function (){
Route::get('/dashboard','dashboardController@index')->name('user.dashboard');
Route::get('/reservation_in-person','TurnController@reservation_person')->name('user.reservation_in-person');
Route::get('/onsite_service','TurnController@onsite_service')->name('user.onsite_service');
Route::get('/records','RecordsController@index')->name('user.records');
Route::get('/Active_acceptance','Active_acceptanceController@index')->name('user.Active_acceptance');
Route::get('/periodic_service','periodic_serviceController@index')->name('user.periodic_service');
Route::get('/circular','circularController@index')->name('user.circular');
Route::get('/profile','profileController@index')->name('user.profile');
Route::get('/Support','dashboardController@reservation')->name('user.Support');
});

