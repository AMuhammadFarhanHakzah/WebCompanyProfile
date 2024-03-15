<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/berita', [PublicController::class, 'berita'])->name('home.berita');
Route::get('/pengumuman', [PublicController::class, 'pengumuman'])->name('home.pengumuman');


Route::prefix('dashboard')->middleware(['auth'])->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::controller(PengumumanController::class)->group(function() {
        Route::get('/pengumuman', 'index')->name('pengumuman.index');
        Route::get('/pengumuman-create', 'create')->name('pengumuman.create');
        Route::post('/pengumuman-create', 'store')->name('pengumuman.store');
        Route::get('/pengumuman/{id}', 'show')->name('pengumuman.show');
        Route::POST('/pengumuman/{id}', 'update')->name('pengumuman.update');
        Route::get('/pengumuman-delete/{id}', 'delete')->name('pengumuman.delete');
    });
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
