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


Route::group(['prefix' => 'user', 'namespace' => 'user'], function () {
    Route::get('/dashboard', 'dashboardController@index')->name('user.dashboard');
    Route::get('/reservation_in-person', 'TurnController@reservation_person')->name('user.reservation_in-person');
    Route::post('/reservation_in-person/store', 'TurnController@reservation_person_store')->name('user.reservation_person_store');
    Route::get('/onsite_service', 'TurnController@onsite_service')->name('user.onsite_service');
    Route::post('/onsite_service/store', 'TurnController@onsite_service_store')->name('user.onsite_service_store');
    Route::get('/records', 'RecordsController@index')->name('user.records');
    Route::get('/Active_acceptance', 'Active_acceptanceController@index')->name('user.Active_acceptance');
    Route::get('/periodic_service', 'periodic_serviceController@index')->name('user.periodic_service');
    Route::get('/circular', 'circularController@index')->name('user.circular');
    Route::get('/profile', 'profileController@index')->name('user.profile');
    Route::get('/Support', 'dashboardController@reservation')->name('user.Support');
});

Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');

    Route::get('turns', 'TurnsController@index')->name('admin.turns');
    Route::get('turns/accept/{id}', 'TurnsController@accept')->name('admin.turns.accept');
    Route::get('turns/un_accept/{id}', 'TurnsController@unaccept')->name('admin.turns.un_accept');


    Route::get('/acceptance', 'AcceptanceController@index')->name('admin.acceptance');
    Route::get('/acceptance/accept/{id}', 'AcceptanceController@accept')->name('admin.acceptance.accept');
    Route::post('/acceptance/accept_store/{id}', 'AcceptanceController@accept_store')->name('admin.acceptance.accept.store');
    Route::get('/acceptance/Expert_opinion/{id}', 'AcceptanceController@Expert_opinion')->name('admin.acceptance.Expert_opinion');
    Route::post('/acceptance/Expert_opinion/{id}/store', 'AcceptanceController@Expert_opinion_store')->name('admin.acceptance.Expert_opinion.store');

    Route::get('/acceptance/change_status/{id}/Maintenance', 'AcceptanceController@change_status_Maintenance')->name('admin.acceptance.change.status.Maintenance');
    Route::get('/acceptance/change_status/{id}/Awaiting delivery', 'AcceptanceController@change_status_Awaiting_delivery')->name('admin.acceptance.change.status.Awaiting_delivery');
    Route::get('/acceptance/change_status/{id}/Delivered', 'AcceptanceController@change_status_Delivered')->name('admin.acceptance.change.status.Delivered');


    Route::get('/user/records/{id}', 'UserController@user_records')->name('admin.user_records');
    Route::get('/user/edit/{id}', 'UserController@user_edit')->name('admin.user.edit');
    Route::post('/user/edit/store/{id}', 'UserController@user_edit_store')->name('admin.user.edit.store');
    Route::post('/user/edit/care/store/{id}', 'UserController@user_edit_care_store')->name('admin.user.edit.care.store');
    Route::get('/user/new', 'UserController@user_new')->name('admin.user.new');
    Route::post('/user/new/store', 'UserController@user_new_store')->name('admin.user.new.store');
    Route::post('/user/search', 'UserController@search')->name('admin.user.search');

    Route::get('/users', 'UserController@index')->name('admin.users');
    Route::get('/users/insert', 'UserController@insert')->name('admin.users.insert');
});

