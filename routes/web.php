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
// landing page
Route::get('/', 'LandingController@home');
Route::get('/about', 'LandingController@about');
Route::get('/contact', 'LandingController@contact');
// login
Route::get('/loginPage', 'LoginController@login')->middleware('admin');
Route::post('/postLogin', 'LoginController@postLogin')->name('postLogin');
Route::get('/logout', 'LoginController@logout');
// register
Route::get('/registerPetani', 'RegisterController@registerPetani');
Route::get('/registerPabrik', 'RegisterController@registerPabrik');
Route::post('/doRegisterPetani', 'RegisterController@doRegisterPetani')->name('doRegisterPetani');
Route::post('/doRegisterPabrik', 'RegisterController@doRegisterPabrik')->name('doRegisterPabrik');

Auth::routes();

// Route::get('/homeAdmin', 'AdminController@home')->name('homeAdmin');
Route::get('/admAdmin', 'AdminController@dataAdmin');
Route::get('/admin/{id}/detail', 'AdminController@detail');
Route::get('/admPabrik', 'AdminController@dataPabrik');
Route::get('/admPetani', 'AdminController@dataPetani');
Route::get('/admRendemen', 'AdminController@dataRendemen');
Route::get('/admAntrian', 'AdminController@dataAntrian');
// Route::get('/createAdmin', 'AdminController@create')->name('admin.store');
// Route::get('/Admin','AdminController@index');