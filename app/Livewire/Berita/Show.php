<?php

namespace App\Livewire\Berita;

use App\Models\Berita;
use Livewire\Component;

class Show extends Component
{
    public $slug, $berita;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->berita = Berita::where('slug', $this->slug)->firstOrFail();
        if (!session()->has('viewed_' . $this->berita->id)) {
            $this->berita->increment('views');
            session()->put('viewed_' . $this->berita->id, true);
        }
    }

    public function render()
    {
        return view('livewire.berita.show');
    }
}
