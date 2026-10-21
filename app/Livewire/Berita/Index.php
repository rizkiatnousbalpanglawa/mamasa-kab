<?php

namespace App\Livewire\Berita;

use App\Models\Berita;
use App\Models\BeritaKategori;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Berita | Website Resmi PEMKAB Mamasa')]
class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $data['berita'] = Berita::with(['penulis', 'kategori'])->paginate(4);
        $data['terpopuler'] = Berita::with(['penulis', 'kategori'])->orderByDesc('views')->limit(5)->get();
        $data['terbaru'] = Berita::with(['penulis', 'kategori'])->latest()->paginate(4, ['*'], 'terbaruPage');
        $data['kategori'] = BeritaKategori::with(['berita'])->get();

        return view('livewire.berita.index', $data);
    }
}
