<?php

namespace App\Livewire\Pengumuman;

use App\Models\Pengumuman;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $pencarian = '', $tahun = '';
    protected $paginationTheme = 'bootstrap';
    public function updated()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Pengumuman::query();
        if ($this->pencarian) {
            $query->where('judul', 'LIKE', '%' . $this->pencarian . '%');
        };

        if ($this->tahun) {
            $query->whereYear('tanggal', $this->tahun);
        };

        $data['pengumuman'] = $query->paginate(5);

        $data['tahunInformasi'] = Pengumuman::selectRaw('YEAR(tanggal) as tahun')
            ->distinct()
            ->pluck('tahun');

        return view('livewire.pengumuman.index', $data);
    }
}
