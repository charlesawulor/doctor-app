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
    return view('homepage');
});

Auth::routes();

Route::get('/user/complete-profile', 'DoctorController@index')->name('complete-profile');

//Route::resource('complete-profile','DoctorController')->name('complete-profile');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'UserController@index')->name('user');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::post('/user/complete-profile', 'DoctorController@store')->name('profile'); 
Route::get('/user/payment', 'DoctorController@payment')->name('payment');

Route::get('/user/payment', 'DoctorController@charge')->name('payment');

Route::post('/user/complete-profile/{id}', 'DoctorController@update')->name('profileupdate'); 

Route::resource('/user/singlepage','DoctorController');

Route::get('/booking-cart', 'DoctorController@getCart')->name('booking-cart'); 

Route::get('/add-to-cart/{id}',[
    'uses' => 'DoctorController@getAddToCart',
    'as' => 'singlepage.addToCart'  
    ]);

