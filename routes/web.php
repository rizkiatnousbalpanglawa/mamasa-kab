<?php

use App\Http\Controllers\ViewInformasiController;
use App\Http\Controllers\ViewPengumumanController;
use App\Http\Middleware\HitCounterMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware(HitCounterMiddleware::class)->group(function () {
    Route::get('/beranda', App\Livewire\Home::class);

    Route::get('/berita', App\Livewire\Berita\Index::class);
    Route::get('/berita/{slug}', App\Livewire\Berita\Show::class)->name('berita.detail');

    Route::get('/kegiatan', App\Livewire\Kegiatan\Index::class);
    Route::get('/kegiatan/{slug}', App\Livewire\Kegiatan\Show::class)->name('kegiatan.detail');

    Route::get('/pengumuman', App\Livewire\Pengumuman\Index::class);
    Route::get('/pengumuman/view/{id}', [ViewPengumumanController::class, 'view'])->name('pengumuman.view');


    Route::get('/visi-misi', App\Livewire\Visimisi::class);
    Route::get('/sejarah', App\Livewire\Sejarah::class);
    Route::get('/lambang', App\Livewire\Lambang::class);
    Route::get('/pemerintahan', App\Livewire\Pemerintahan::class);

    Route::get('/profil', App\Livewire\ProfilKepalaDaerah::class);

    Route::get('/potensi', App\Livewire\Potensi::class);
    Route::get('/potensi/detail/{slug}', App\Livewire\PotensiDetail::class)->name('potensi.detail');


    Route::get('/info', App\Livewire\Info::class);
    Route::get('/info/view/{id}', [ViewInformasiController::class, 'view'])->name('informasi.view');
});

Route::get('/', App\Livewire\Portal::class);
