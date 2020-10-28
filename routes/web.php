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
Route::get('/loginPage', 'LoginController@login');
Route::post('/postLogin', 'LoginController@postLogin')->name('postLogin');
Route::get('/logout', 'LoginController@logout');
// 

Auth::routes();

Route::get('/homeAdmin', 'AdminController@home')->name('homeAdmin');
Route::get('/admAdmin', 'AdminController@dataAdmin');
Route::get('/admPabrik', 'AdminController@dataPabrik');
Route::get('/admPetani', 'AdminController@dataPetani');
Route::get('/admRendemen', 'AdminController@dataRendemen');
Route::get('/admAntrian', 'AdminController@dataAntrian');