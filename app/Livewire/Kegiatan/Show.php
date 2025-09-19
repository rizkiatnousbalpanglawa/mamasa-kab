<?php

namespace App\Livewire\Kegiatan;

use App\Models\Kegiatan;
use Livewire\Component;

class Show extends Component
{
    public $slug, $kegiatan;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->kegiatan = Kegiatan::where('slug', $this->slug)->firstOrFail();
        if (!session()->has('viewed_' . $this->kegiatan->id)) {
            $this->kegiatan->increment('views');
            session()->put('viewed_' . $this->kegiatan->id, true);
        }
    }

    public function render()
    {
        $data['kegiatan'] = Kegiatan::with(['kategori'])->firstWhere('slug', $this->slug);
        $data['kegiatanLain'] = Kegiatan::limit(5)->get();
        return view('livewire.kegiatan.show', $data);
    }
}
