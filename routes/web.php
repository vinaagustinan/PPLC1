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

// Route::get('/akun/{id}', 'profilController@profil');

Auth::routes();

Route::group(['middleware' => ['auth','CekAktor:Admin']],function(){
    Route::get('/homeAdmin', 'AdminController@home')->name('homeAdmin');
    Route::get('/notifikasi','AdminController@notif');
    Route::get('/akunAdmin','profilController@profilAdmin');

    Route::get('/admAdmin', 'AdminController@dataAdmin');
    Route::get('/admAdmin/{id}/detail', 'AdminController@detailAdmin');

    Route::get('/admPabrik', 'AdminController@dataPabrik');
    Route::get('/admPabrik/{id}/edit', 'AdminController@editPabrik');
    Route::post('/admPabrik/{id}/update', 'AdminController@updatePabrik');

    Route::get('/admPetani', 'AdminController@dataPetani');
    Route::get('/admPetani/{id}/edit', 'AdminController@editPetani');
    Route::post('/admPetani/{id}/update', 'AdminController@updatePetani');

    Route::get('/admAntrian', 'AdminController@dataAntrian');
    Route::get('/notifPabrik', 'AdminController@notifPabrik');
    Route::get('/notifPetani', 'AdminController@notifPetani');
    Route::get('/admRendemen', 'AdminController@dataRendemen');
    Route::get('/admRendemen/{id}/rincian', 'AdminController@rincianRendemen');
});


Route::group(['middleware' => ['auth','CekAktor:Pabrik']],function(){
   
    Route::get('/homePabrik', 'PabrikController@home')->name('homePabrik');
    Route::get('/akunPabrik', 'profilController@profilPabrik');
    // Route::get('/akunPabrik/{id}', 'PabrikController@akun');

    //data Rendemen
    Route::get('/pabrikRendemen', 'RendemenController@dataRendemen');
    Route::get('/tambahRendemen', 'RendemenController@tambahdataRendemen');
    Route::post('/tambahRendemen/createRendemen', 'RendemenController@create');
    Route::get('/pabrikRendemen/{id}/edit', 'RendemenController@editdataRendemen');
    Route::post('/pabrikRendemen/{id}/update', 'RendemenController@updatedataRendemen');
    Route::get('/admAntrian', 'PabrikController@dataAntrian');  
    Route::get('password', 'PabrikController@change')->name('password.change');
    Route::put('password', 'PabrikController@updatepass')->name('password.update');
});

Route::group(['middleware' => ['auth','CekAktor:Petani']],function(){
    //halaman petani
    Route::get('/homePetani', 'PetaniController@home')->name('homePetani');
    Route::get('/akunPetani', 'profilController@profilPetani');//
    Route::get('/admAntrian', 'PetaniController@dataAntrian');  
    Route::get('password', 'PetaniController@change')->name('password.change');
    Route::put('password', 'PetaniController@updatepass')->name('password.update');
    Route::get('/petaniRendemen', 'PetaniController@dataRendemen');
    Route::get('/petaniRendemen/{id}/rincian', 'RendemenController@rincianRendemen');
});
