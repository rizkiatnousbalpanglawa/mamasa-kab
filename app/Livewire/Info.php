<?php

namespace App\Livewire;

use App\Models\Informasi;
use App\Models\InformasiKategori;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Informasi | Website Resmi PEMKAB Mamasa')]
class Info extends Component
{
    use WithPagination;

    public $pencarian = '';

    public $kategoriTerpilih = '';

    public $tahun = '';

    protected $paginationTheme = 'bootstrap';

    public function updated()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Informasi::with(['kategori']);
        if ($this->pencarian) {
            $query->where('judul', 'LIKE', '%'.$this->pencarian.'%');
        }
        if ($this->kategoriTerpilih) {
            $query->where('kategori_id', $this->kategoriTerpilih);
        }

        if ($this->tahun) {
            $query->whereYear('waktu_informasi', $this->tahun);
        }

        $data['info'] = $query->latest()->paginate(5);
        $data['tahunInformasi'] = Informasi::selectRaw('YEAR(waktu_informasi) as tahun')
            ->distinct()
            ->pluck('tahun');
        $data['kategori'] = InformasiKategori::with(['informasi'])->get();

        return view('livewire.info', $data);
    }
}
