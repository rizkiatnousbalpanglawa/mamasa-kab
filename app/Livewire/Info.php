<?php

namespace App\Livewire;

use App\Models\Informasi;
use App\Models\InformasiKategori;
use Livewire\Component;

class Info extends Component
{
    public function render()
    {
        $data['info'] = Informasi::with(['kategori'])->paginate(10);
        $data['kategori'] = InformasiKategori::with(['informasi'])->get();
        return view('livewire.info', $data);
    }
}
