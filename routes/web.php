<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LoginController;
use App\Models\Berita;
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
    return view('Home');
});
Route::get('/Admin/Login', function() {
    return view('/Admin/AdminLogin');
})->name('login')->middleware('guest');
Route::get('/Admin', function() {
    return view('/Admin/ControlPanelMain');
})->middleware('auth:admins');
Route::post('/Admin/Logout', [LoginController::class, 'logout']);
// Route::get('/Admin/Berita', function() {
//     return view('/Admin/Berita');
// });
Route::post('/Admin/Login', [LoginController::class, 'authenticate']);
Route::get('/Admin/Berita', [BeritaController::class, 'AdminAll']);
Route::get('/Berita', [BeritaController::class, 'index']);
Route::get('/Berita/{Slug}', [BeritaController::class, 'show']);
