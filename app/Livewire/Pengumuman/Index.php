<?php

namespace App\Livewire\Pengumuman;

use App\Models\Pengumuman;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Pengumuman | Website Resmi PEMKAB Mamasa')]
class Index extends Component
{
    use WithPagination;

    public $pencarian = '';

    public $tahun = '';

    public $filterOpen = false;

    protected $paginationTheme = 'bootstrap';

    public function updated()
    {
        $this->resetPage();
    }

    public function resetFilter()
    {
        $this->reset(['pencarian', 'tahun']);
        $this->resetPage();
    }

    public function getHasActiveFilterProperty()
    {
        return filled($this->pencarian) || filled($this->tahun);
    }

    public function render()
    {
        $query = Pengumuman::query();
        if ($this->pencarian) {
            $query->where('judul', 'LIKE', '%'.$this->pencarian.'%');
        }

        if ($this->tahun) {
            $query->whereYear('tanggal', $this->tahun);
        }

        $data['pengumuman'] = $query->paginate(5);

        $data['tahunInformasi'] = Pengumuman::selectRaw('YEAR(tanggal) as tahun')
            ->distinct()
            ->pluck('tahun');

        return view('livewire.pengumuman.index', $data);
    }
}
