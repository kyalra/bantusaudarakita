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


Route::get('/login2',function(){
    return view('auth.login2');
});
Route::get('/list_donasi',function(){
    return view('list_donasi');
});
Route::get('/','BuatDonasiController@getdonasi');
Route::post('/donasi/{id}','DonaturController@donatur');
Route::get('/donasi/','DonaturController@getdonatur');
Route::get('/list_donasi','ListDonasiController@getdaftardonasi');
Route::get('/donasi/cofirmasi/{id}','DonaturController@confimasi');
Route::get('/hapusdonasi{id}', 'ListDonasiController@delete')->name('deletedonasi');

Route::post('/modaldonasi','BuatDonasiController@buat_donasi');
Route::post('/modaldonatur','DonaturController@donatur');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'donasi',  'middleware'=>['auth']], function(){
    Route::post('/donasi/{id}','DonaturController@donatur');
    Route::get('/','DonaturController@getdonatur');
    Route::get('/list_donasi','ListDonasiController@getdaftardonasi');
    Route::get('/donasi/cofirmasi/{id}','DonaturController@confimasi');
    Route::get('/hapusdonasi{id}', 'ListDonasiController@delete')->name('deletedonasi');
});
