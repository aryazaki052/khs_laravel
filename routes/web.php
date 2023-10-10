<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\prokerController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\tentangController;

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
    return view('frontend-home.frontend-home');
});
// Route::get('dashboard', function () {
//     return view('back.dashboard-content');
// });



Auth::routes();
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [LandingPageController::class, 'index'])->name('frontend.content-home');
Route::get('/profil/tentang', [tentangController::class, 'index'])->name('frontend.profil.tentang');
Route::get('/berita/{id}', 'BeritaController@show')->name('berita.show');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/kategori', KategoriController::class);
    Route::resource('/artikel', ArtikelController::class);
    Route::resource('/slide', SlideController::class);
    Route::resource('/pengurus', PengurusController::class);
    Route::resource('/proker', prokerController::class);
    

});







