<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataumkmController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\FotoprofileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileumkmController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\UsersettingController;
use App\Http\Controllers\WisataController;
use App\Models\Produk;
use App\Models\Wisata;
use Illuminate\Support\Facades\Route;

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

//autentikasi
Route::resource('/daftar', RegisterController::class);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//tampilan home
Route::get('/', [HomeController::class, 'index']);
Route::get('/detail-barang', [HomeController::class, 'detail']);

//detail
Route::get('/detail-barang/{id}', [DetailController::class, 'index']);
Route::resource('/komentar', KomentarController::class)->middleware('cekstatus:user,admin');
Route::resource('/follow', FollowerController::class)->middleware('cekstatus:user,admin');

//tampilan umkm
Route::get('/umkm', [UmkmController::class, 'index']);
Route::get('/umkm/cari', [UmkmController::class, 'cari']);

//tampilan wisata
Route::get('/wisata', function () {
    $datas = Wisata::all();
    return view('wisata', ["title" => "Wisata"], compact('datas'));
});

//admin user
Route::get('/admin-user', function () {
    return view('adminuser/dashboard', ["title" => "Dashboard"]);
})->middleware('cekstatus:user');

//Route::resource('/ubahfoto_profile', [FotoprofileController::class, 'update'])->middleware('cekstatus:user');

Route::resource('/profile', ProdukController::class)->middleware('cekstatus:user');

Route::resource('/data-umkm-user', SosmedController::class)->middleware('cekstatus:user');

Route::resource('/setting-akun', UsersettingController::class)->middleware('cekstatus:user');

Route::post('/setting-akun/sandi', [UsersettingController::class, 'ganti'])->middleware('cekstatus:user');


//admin web
Route::get('/admin-web', function () {
    return view('adminweb/dashboardweb', ["title" => "Dashboard"]);
})->middleware('cekstatus:admin');

Route::resource('/data-profile', ProfileumkmController::class)->middleware('cekstatus:admin');

Route::resource('/data-umkm', DataumkmController::class)->middleware('cekstatus:admin');

Route::resource('/data-wisata', WisataController::class)->middleware('cekstatus:admin');

Route::resource('/kategori-usaha', KategoriController::class)->middleware('cekstatus:admin');

Route::resource('/data-user', PenggunaController::class)->middleware('cekstatus:admin');

Route::resource('/data-admin', AdminController::class)->middleware('cekstatus:admin');