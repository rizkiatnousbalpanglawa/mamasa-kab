<?php

namespace App\Livewire\Berita;

use App\Models\Berita;
use App\Models\BeritaKategori;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

#[Title('Kategori Berita | Website Resmi PEMKAB Mamasa')]
class Kategori extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public string $slug;

    public function mount(string $slug): void
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $data['berita'] = Berita::with(['penulis', 'kategori'])
            ->whereHas('kategori', function ($query) {
                $query->where('slug', $this->slug);
            })
            ->paginate(4);

        $data['terpopuler'] = Berita::with(['penulis', 'kategori'])
            ->orderByDesc('views')
            ->limit(5)
            ->get();

        $data['terbaru'] = Berita::with(['penulis', 'kategori'])
            ->latest()
            ->paginate(4, ['*'], 'terbaruPage');

            $data['kategoriTerpilih'] = BeritaKategori::where('slug', $this->slug)->firstOrFail();

        $data['kategori'] = BeritaKategori::with(['berita'])->get();

        return view('livewire.berita.kategori', $data);
    }
}
