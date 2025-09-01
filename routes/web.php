<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Home::class);
Route::get('/berita', App\Livewire\Berita\Index::class);
Route::get('/berita/show', App\Livewire\Berita\Show::class);

Route::get('/kegiatan', App\Livewire\Kegiatan\Index::class);
Route::get('/kegiatan/show', App\Livewire\Kegiatan\Show::class);

Route::get('/visi-misi', App\Livewire\Visimisi::class);
Route::get('/sejarah', App\Livewire\Sejarah::class);
Route::get('/lambang', App\Livewire\Lambang::class);
Route::get('/info', App\Livewire\Info::class);

