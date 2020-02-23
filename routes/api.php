<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('getallfakultas','fakultasCtrl@apiGetAll');
Route::post('getallprogdi','progdiCtrl@apiGetAll');
Route::post('regdosen','dosenCtrl@apiRegDosen');
Route::post('regmahasiswa','mahasiswaCtrl@apiRegMahasiswa');
Route::post('loginapp','userCtrl@apiLogin');
Route::get('getbukuall', 'bukuCtrl@apiGetAllBuku');
Route::post('riwayatpinjam', 'pinjamCtrl@apiRiwayatPinjam');
Route::post('apipinjam', 'pinjamCtrl@apiPinjam');
Route::post('apikembali', 'pinjamCtrl@apiKembali');
Route::post('apikunjungan', 'kunjunganCtrl@apiKunjungan');
Route::post('apicekpinjam', 'pinjamCtrl@apiCekStatus');
Route::post('apikunjunganout', 'kunjunganCtrl@apiKunjunganOut');
