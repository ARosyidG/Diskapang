<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Dasboard;
use App\Http\Controllers\FileController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublikasiController;
use App\Models\Agenda;
use App\Models\Berita;
use App\Models\File;
use App\Models\Galery;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home', [
        'berita' => Berita::all()->whereNotNull('Publish_at')->take(3),
        'Galeri' => Galery::all()->take(3),
        'Pengumuman' => Pengumuman::all()->take(3),

    ]);
});
Route::get('/Sejarah', function(){
    return view('Sejarah');
});
Route::get('/tugasdanfungsi', function(){
    return view('TugasDanFungsi');
});

Route::get('/Admin/Login', function() {
    return view('/Admin/AdminLogin');
})->middleware('guest:admins')->name('login');
Route::get('/Admin', function() {
    return view('Admin.Admin');
})->middleware('auth:admins');
Route::post('/Admin/Logout', [LoginController::class, 'logout']);
// Route::get('/Admin/Berita', function() {
//     return view('/Admin/Berita');
// });
Route::post('/Admin/Login', [LoginController::class, 'authenticate']);
// Route::get('/Admin/Berita', [BeritaController::class, 'AdminAll'])->middleware('auth');
Route::get('/Berita', [BeritaController::class, 'index']);
Route::get('/Berita/{Slug}', [BeritaController::class, 'show']);
Route::resource('/Admin/Berita', Dasboard::class)->middleware('auth:admins');
Route::post('/Admin/Berita/Cari', [Dasboard::class,'Cari'])->middleware('auth:admins');
Route::resource('/Admin/Publikasi', PublikasiController::class)->middleware('auth:admins');
Route::resource('/Admin/Galeri', GaleryController::class)->middleware('auth:admins');
Route::get('/Admin/checkSlug', [BeritaController::class, 'checkSlug']);
Route::get('/Admin/Publish/{PublishDate}/{id}', [BeritaController::class, 'Publish']);
Route::get('/Admin/checkavailability', [BeritaController::class, 'checkavailability']);
Route::post('/comment/store', [CommentController::class, 'store']);
Route::get('/Publikasi', function(){
    return view('Publikasi', [
        'File' => File::all(),
        'Agenda' => Agenda::all(),
        'Pengumuman' => Pengumuman::all(),
    ]);
});
Route::get('/VisiMisi', function(){
    return view('VisiMisi');
});
Route::get('/StrukturOrganisasi', function(){
    return view('StrukturOrganisasi');
});
Route::get('/DataPegawai', function(){
    return view('DaftarPegawai');
});
Route::get('/Kelembagaan', function(){
    return view('Kelembagaan');
});
Route::get('/Kontak', function(){
    return view('Kontak');
});
Route::get('/Program', function(){
    return view('Program');
});
Route::get('/Layanan', function(){
    return view('Layanan');
});
Route::post('/Kontak/store',[KontakController::class, 'store']);
Route::post('/Admin/Publikasi/Pengumuman/{id}', [PublikasiController::class ,'destroyPengumuman']);
Route::post('/Admin/Publikasi/Agenda/{id}', [PublikasiController::class ,'destroyAgenda']);
Route::get('/Admin/Kontak', [KontakController::class, 'index']);