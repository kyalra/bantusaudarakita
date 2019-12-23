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


Route::get('/logreg',function(){
    return view('auth.logreg');
});
//     Route::get('/login2',function(){
//         return view('auth.login2');
// });

Route::get('/','BuatDonasiController@getdonasi');
// Route::post('/donasi/{id}','DonaturController@donatur');
// Route::get('/donasi/','DonaturController@getdonatur');
// Route::get('/list_donasi','ListDonasiController@getdaftardonasi');
// Route::get('/donasi/cofirmasi/{id}','DonaturController@confimasi');
// Route::get('/hapusdonasi{id}', 'ListDonasiController@delete')->name('deletedonasi');

Route::post('/modaldonasi','BuatDonasiController@buat_donasi');
Route::post('/modaldonatur/{id}','DonaturController@donatur');

Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');
// Route::group(['prefix' => 'donasi',  'middleware'=>['auth']], function(){
//     Route::post('/donasi/{id}','DonaturController@donatur');
//     Route::get('/','DonaturController@getdonatur');
//     Route::get('/list_donasi','ListDonasiController@getdaftardonasi');
//     Route::get('/cofirmasi/{id}','DonaturController@confimasi');
//     Route::get('/hapusdonasi{id}', 'ListDonasiController@delete')->name('deletedonasi');
// });

Route::namespace('\Modules\Dashboard\Http\Controllers')->group(function (){
    Route::prefix('dashboard')->group(function() {
        Route::get('/', 'DashboardController@index');
    });
});

Route::namespace('\Modules\DaftarDonasi\Http\Controllers')->group(function (){
    Route::prefix('daftardonasi')->group(function() {
        Route::get('/','DaftarDonasiController@index');
        Route::get('/hapusdonasi{id}', 'DaftarDonasiController@delete')->name('deletedonasi');
    });
});
Route::namespace('\Modules\ConfirmTransfer\Http\Controllers')->group(function (){
    Route::prefix('confirmtransfer')->group(function() {
        Route::get('/','ConfirmTransferController@index');
        Route::get('/{id}','ConfirmTransferController@confimasi')->name('confirm.add');
    });
});

