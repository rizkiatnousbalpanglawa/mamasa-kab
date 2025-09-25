<?php

namespace App\Livewire;

use App\Models\Informasi;
use App\Models\InformasiKategori;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Info extends Component
{
    public $pencarian = '', $kategoriTerpilih = '';


    public function render()
    {
        $query = Informasi::with(['kategori']);
        if ($this->pencarian) {
            $query->where('judul', 'LIKE', '%' . $this->pencarian . '%');
        };
        if ($this->kategoriTerpilih) {
            $query->where('kategori_id', $this->kategoriTerpilih);
        };

        $data['info'] = $query->paginate(10);
        $data['kategori'] = InformasiKategori::with(['informasi'])->get();
        return view('livewire.info', $data);
    }
}
