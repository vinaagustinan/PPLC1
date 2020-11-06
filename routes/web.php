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
Route::get('/loginPage', 'LoginController@login')->name('loginPage');
// Route::get('/loginPage', 'LoginController@login');
Route::post('/postLogin', 'LoginController@postLogin')->name('postLogin');
Route::get('/logout', 'LoginController@logout');
// register
Route::get('/registerPetani', 'RegisterController@registerPetani');
Route::get('/registerPabrik', 'RegisterController@registerPabrik');
Route::post('/doRegisterPetani', 'RegisterController@doRegisterPetani')->name('doRegisterPetani');
Route::post('/doRegisterPabrik', 'RegisterController@doRegisterPabrik')->name('doRegisterPabrik');

// Auth::routes();
// Route::group(['middleware' => ['auth','CekAktor:admin']],function(){
//halaman admin
    Route::get('/homeAdmin', 'AdminController@home')->name('homeAdmin');
    Route::get('/notifikasi','AdminController@notif');
    // Route::get('/akunAdmin', 'AdminController@akun');

    Route::get('/admAdmin', 'AdminController@dataAdmin');
    Route::get('/admAdmin/{id}/detail', 'AdminController@detailAdmin');

    Route::get('/admPabrik', 'AdminController@dataPabrik');
    Route::get('/admPabrik/{id}/edit', 'AdminController@editPabrik');
    Route::post('/admPabrik/{id}/update', 'AdminController@updatePabrik');
    Route::get('/admPetani', 'AdminController@dataPetani');
    Route::get('/admPetani/{id}/edit', 'AdminController@editPetani');
    Route::post('/admPetani/{id}/update', 'AdminController@updatePetani');
    Route::get('/admRendemen', 'AdminController@dataRendemen');
    Route::get('/admAntrian', 'AdminController@dataAntrian');
    Route::get('/notifPabrik', 'AdminController@notifPabrik');
    Route::get('/notifPetani', 'AdminController@notifPetani');
// });

// Route::group(['middleware' => ['auth','CekAktor:pabrik']],function(){
    //halaman pabrik
    Route::get('/homePabrik', 'PabrikController@home')->name('homePabrik');
    Route::get('/akunAdmin/{{$admin->id}}', 'PabrikController@akun');
    Route::get('/pabrikRendemen', 'PaController@dataRendemen');
    Route::get('/admAntrian', 'PabrikController@dataAntrian');  
    Route::get('password', 'PabrikController@change')->name('password.change');
    Route::put('password', 'PabrikController@updatepass')->name('password.update');
// });

// Route::group(['middleware' => ['auth','CekAktor:petani']],function(){
    //halaman petani
    Route::get('/homePetani', 'PetaniController@home')->name('homePetani');
    Route::get('/akun', 'PetaniController@akun');
    Route::get('/petaniRendemen', 'PetaniController@dataRendemen');
    Route::get('/admAntrian', 'PetaniController@dataAntrian');  
    Route::get('password', 'PetaniController@change')->name('password.change');
    Route::put('password', 'PetaniController@updatepass')->name('password.update');
// });
