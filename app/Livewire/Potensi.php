<?php

namespace App\Livewire;

use App\Models\Potensi as ModelsPotensi;
use App\Models\PotensiKategori;
use Livewire\Component;

class Potensi extends Component
{
    public $filterKategoriId = null;

    // Klik tombol kategori → set filter
    public function setFilter($kategoriId = null)
    {
        $this->filterKategoriId = $kategoriId;
    }

    public function render()
    {
        // ambil semua kategori
        $kategoriPotensi = PotensiKategori::all();

        // query potensi
        $query = ModelsPotensi::query();
        if ($this->filterKategoriId) {
            $query->where('kategori_id', $this->filterKategoriId);
        }
        $semuaPotensi = $query->get();

        return view('livewire.potensi', [
            'semuaPotensi'    => $semuaPotensi,
            'kategoriPotensi' => $kategoriPotensi,
            'filterAktif'     => $this->filterKategoriId,
        ]);
    }
}
