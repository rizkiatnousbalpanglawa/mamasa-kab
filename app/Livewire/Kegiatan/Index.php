<?php

namespace App\Livewire\Kegiatan;

use App\Models\Kegiatan;
use App\Models\KegiatanKategori;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Kegiatan | Website Resmi PEMKAB Mamasa')]
class Index extends Component
{
    public function render()
    {
        $data['kegiatan'] = Kegiatan::with('kategori')->paginate('5');
        $data['kategori'] = KegiatanKategori::with('kegiatan')->get();
        return view('livewire.kegiatan.index', $data);
    }
}
