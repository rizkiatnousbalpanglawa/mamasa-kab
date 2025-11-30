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
    public $pencarian = '', $kategoriTerpilih = '', $tahun = '';


    public function render()
    {
        $query = Informasi::with(['kategori']);
        if ($this->pencarian) {
            $query->where('judul', 'LIKE', '%' . $this->pencarian . '%');
        };
        if ($this->kategoriTerpilih) {
            $query->where('kategori_id', $this->kategoriTerpilih);
        };

        if ($this->tahun) {
            $query->whereYear('waktu_informasi', $this->tahun);
        };

        $data['info'] = $query->paginate(10);
        $data['tahunInformasi'] = Informasi::selectRaw('YEAR(waktu_informasi) as tahun')
            ->distinct()
            ->pluck('tahun');
        $data['kategori'] = InformasiKategori::with(['informasi'])->get();
        return view('livewire.info', $data);
    }
}
