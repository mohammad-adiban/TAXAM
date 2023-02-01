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

// web site " taxam.ir "
Route::get('/', function () {
    return view('taxam');
})->name('taxam');




Route::group(['namespace' => 'Admin'],function () {

// WebUsers routes

    Route::post('/webusers', 'WebUsersController@store')->name('admin.webUsers.store');
    Route::post('/webconsultants', 'WebConsultantsController@store')->name('admin.webConsultants.store');
    Route::post('/webconsultants/resume', 'WebConsultantsController@store_resume')->name('admin.webConsultants.store_resume');


});