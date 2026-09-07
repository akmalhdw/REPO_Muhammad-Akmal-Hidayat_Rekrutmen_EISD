<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    $beritas = \App\Models\Berita::latest()->take(5)->get();
    return view('dashboard', compact('beritas'));
})->name('dashboard');

Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');

Route::middleware(['auth'])->group(function () {
    Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');
});

Route::get('/edukasi', function () {
    return view('edukasi');
})->name('edukasi');

Route::get('/insiden', function () {
    return view('insiden');
})->name('insiden.index');

Route::get('/insiden/detail', function () {
    return view('insiden_detail');
})->name('insiden.detail');

require __DIR__.'/auth.php';
