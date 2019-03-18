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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Houses Routes
Route::get('/home/houses/setinactive/{houseid}','HouseController@setinactive')->name('home.house.setinactive');
Route::get('/home/houses/setactive/{houseid}','HouseController@setactive')->name('home.house.setactive');
Route::resource('/home/houses', 'HouseController');
//End of houses routes

//Device Routes
Route::get('/home/devices/destroy/{zoneid}','DeviceController@destroy')->name('device.destroy');
Route::patch('/home/devices/update/{zoneid}','DeviceController@update')->name('device.update');
Route::post('/home/devices/store','DeviceController@store')->name('device.store');
Route::get('/home/devices/setinactive/{id}','DeviceController@setinactive')->name('device.setinactive');
Route::get('/home/devices/setactive/{id}','DeviceController@setactive')->name('device.setactive');
Route::get('/home/devices/{id}','DeviceController@index')->name('home.devices');
//end of Device Routes

//Zone Routes
Route::get('/home/zones/setinactive/{zoneid}','ZoneController@setinactive')->name('zone.setinactive');
Route::get('/home/zones/setactive/{zoneid}','ZoneController@setactive')->name('zone.setactive');
Route::post('/home/zones/store/{houseid}','ZoneController@store')->name('zones.store');
Route::get('/home/zones/destroy/{zoneid}','ZoneController@destroy')->name('zones.destroy');
Route::patch('/home/zones/update/{zoneid}','ZoneController@update')->name('zones.update');
Route::get('/home/zones/{houseid}','ZoneController@index')->name('zones');
//End of Zone Routes

Route::get('/home', 'HomeController@index')->name('home');


/* Admin Routes */
Route::prefix('admin')->group(function(){
    
    
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
   
});