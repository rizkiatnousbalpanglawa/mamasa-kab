<?php

namespace App\Livewire;

use App\Models\Potensi;
use Livewire\Component;

class PotensiDetail extends Component
{
    public $slug, $potensi;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->potensi = Potensi::where('slug', $this->slug)->firstOrFail();
        if (!session()->has('viewed_' . $this->potensi->id)) {
            $this->potensi->increment('views');
            session()->put('viewed_' . $this->potensi->id, true);
        }
    }

    public function render()
    {
        $data['potensi'] = Potensi::firstWhere('slug', $this->slug);
        return view('livewire.potensi-detail', $data);
    }
}
