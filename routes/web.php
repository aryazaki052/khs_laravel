<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\SlideController;

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
Route::resource('/', LandingPageController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('/kategori', KategoriController::class);
Route::resource('/artikel', ArtikelController::class);
Route::resource('/slide', SlideController::class);







