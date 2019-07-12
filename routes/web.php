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
 
Route::get('/list_donasi',function(){
    return view('list_donasi');
});
Route::get('/donasihomepage','BuatDonasiController@getdonasi');
Route::get('/donasi','DonaturController@getdonatur');
Route::get('/list_donasi','ListDonasiController@getdaftardonasi');
Route::get('/donasi/cofirmasi/{id}','DonaturController@confimasi');
Route::delete('/hapusdonasi/{id}', 'ListDonasiController@destroy')->name('delete.donasi');

Route::post('/modaldonasi','BuatDonasiController@buat_donasi');
Route::post('/modaldonatur','DonaturController@donatur');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
