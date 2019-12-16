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

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
});

Route::group(['prefix' => 'operator'], function(){
    Route::get('/', 'Operator\DashboardController@index')->name('operator.dashboard');
});

Route::group(['prefix' => 'operator/manajemen_investor'], function(){
    Route::get('/', 'Operator\FormPembukaanRekening@index')->name('operator.form_pembukaan_rekening');
    Route::get('tambah_investor','Operator\FormPembukaanRekening@tambahInvestor')->name('operator.tambah_investor');

});

Route::get('/home', 'HomeController@index')->name('home');
