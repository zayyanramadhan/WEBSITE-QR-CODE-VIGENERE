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
//
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login', 'userCtrl@login');
Route::post('loginPost', 'userCtrl@loginPost');
Route::get('logout', 'userCtrl@logout');
Route::get('/', 'petugasCtrl@views');
Route::get('datapetugas', 'petugasCtrl@views');
Route::post('tambahpetugas', 'userCtrl@registerPetugasPost');
Route::post('updatepetugas', 'userCtrl@updatePetugasPost');
Route::post('deletepetugas', 'userCtrl@deletePetugasPost');
Route::get('datapengunjung', 'petugasCtrl@views');
Route::get('datadonasi', 'sumbang_bukuCtrl@views');
Route::post('donasiaddPost', 'sumbang_bukuCtrl@addPost');
Route::post('donasiupdatePost', 'sumbang_bukuCtrl@updatePost');
Route::post('donasideletePost', 'sumbang_bukuCtrl@deletePost');
Route::get('datapklskripsi', 'pklskripsiCtrl@views');
Route::post('pklskripsiaddPost', 'pklskripsiCtrl@addPost');
Route::post('pklskripsiupdatePost', 'pklskripsiCtrl@updatePost');
Route::post('pklskripsideletePost', 'pklskripsiCtrl@deletePost');
Route::get('fakultas', 'fakultasCtrl@views');
Route::post('fakultasaddPost', 'fakultasCtrl@addPost');
Route::post('fakultasupdatePost', 'fakultasCtrl@updatePost');
Route::post('fakultasdeletePost', 'fakultasCtrl@deletePost');
Route::get('progdi', 'progdiCtrl@views');
Route::post('progdiaddPost', 'progdiCtrl@addPost');
Route::post('progdiupdatePost', 'progdiCtrl@updatePost');
Route::post('progdideletePost', 'progdiCtrl@deletePost');
Route::get('rak', 'rakCtrl@views');
Route::post('rakaddPost', 'rakCtrl@addPost');
Route::post('rakupdatePost', 'rakCtrl@updatePost');
Route::post('rakdeletePost', 'rakCtrl@deletePost');
Route::get('buku', 'bukuCtrl@views');
Route::post('bukuupdatePost', 'bukuCtrl@updatePost');
Route::post('toqr', 'bukuCtrl@generateQR');
Route::get('printqrcode', 'bukuCtrl@qrcode');
Route::get('upjson', 'pklskripsiCtrl@addJson');
Route::get('upjsonbaca', 'sumbang_bukuCtrl@addJson');
Route::post('dosdeletePost', 'petugasCtrl@deleteDosPost');
Route::post('masdeletePost', 'petugasCtrl@deleteMasPost');
Route::get('kunjungan', 'kunjunganCtrl@views');
Route::get('datapinjam', 'pinjamCtrl@views');
Route::get('datamahasiswa', 'petugasCtrl@dmhs');
Route::get('datadosen', 'petugasCtrl@ddos');
Route::get('upmhsdos', 'petugasCtrl@addJson');
Route::post('membayardenda', 'pinjamCtrl@membayardenda');
