<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoEmail;

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

// Home
Route::get('/', 'HomeController@index');

// Penelitian
Route::get('/penelitian', 'PenelitianController@index');
Route::get('/penelitian/create', 'PenelitianController@create');
Route::post('/admin/successlogin/penelitian', 'PenelitianController@store');
Route::get('/penelitian/{research}', 'PenelitianController@show');
Route::get('/penelitian/{research}/edit', 'PenelitianController@edit');
Route::put('/admin/successlogin/penelitian/{research}', 'PenelitianController@update');
Route::delete('/admin/successlogin/penelitian/{research}', 'PenelitianController@destroy');

// Pengabdian
Route::get('/pengabdian', 'PengabdianController@index');
Route::get('/pengabdian/create', 'PengabdianController@create');
Route::post('/admin/successlogin/pengabdian', 'PengabdianController@store');
Route::get('/pengabdian/{comserv}', 'PengabdianController@show');
Route::get('/pengabdian/{comserv}/edit', 'PengabdianController@edit');
Route::put('/admin/successlogin/pengabdian/{comserv}', 'PengabdianController@update');
Route::delete('/admin/successlogin/pengabdian/{comserv}', 'PengabdianController@destroy');

// Kepakaran
Route::get('/kepakaran', 'KepakaranController@index');
Route::get('/kepakaran/detail/mark-otto', 'KepakaranController@show');

// Produk Riset
Route::get('/riset', 'RisetController@index');
Route::get('/riset/judul-riset', 'RisetController@show');

// Publikasi
Route::get('/publikasi', 'PublikasiController@index');
Route::get('/publikasi/create', 'PublikasiController@create');
Route::post('/admin/successlogin/publikasi', 'PublikasiController@store');
Route::get('/publikasi/{publications}', 'PublikasiController@show');
Route::get('/publikasi/{publications}/edit', 'PublikasiController@edit');
Route::get('/publikasi/download/{publications}', 'PublikasiController@getDownload');
Route::put('/admin/successlogin/publikasi/{publications}', 'PublikasiController@update');
Route::delete('/admin/successlogin/publikasi/{publications}', 'PublikasiController@destroy');

// Admin
Route::get('/admin', 'AdminController@index');
Route::post('/admin/checklogin', 'AdminController@checklogin');
Route::get('/admin/successlogin', 'AdminController@successlogin');
Route::get('/admin/successlogin/penelitian', 'AdminController@penelitian');
Route::get('/admin/successlogin/pengabdian', 'AdminController@pengabdian');
Route::get('/admin/successlogin/publikasi', 'AdminController@publikasi');
Route::get('/admin/logout', 'AdminController@logout');

Route::get('/forkomil-dan-conferences', function () {
    return view('forkomil-dan-conferences');
});

Route::get('/paten', function () {
    return view('paten');
});

Route::get('/hakcipta', function () {
    return view('hakcipta');
});

Route::get('/download', function () {
    return view('download');
});

// Route::get('/admin', function () {
//     return view('berita-penelitian/admin');
// });

// Email related routes
// Route::get('/mail', function() {
//     Mail::to("felicia.funay@gmail.id")->send(new DemoEmail());
//     return new DemoEmail();
// });
