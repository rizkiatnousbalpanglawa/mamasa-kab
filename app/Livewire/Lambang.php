<?php

namespace App\Livewire;

use App\Models\Lambang as ModelsLambang;
use Livewire\Component;

class Lambang extends Component
{
    public $lambang;

    public function render()
    {
        $data['lambang'] = ModelsLambang::first();
        $this->lambang = ModelsLambang::first();
        if (!session()->has('viewed_' . $this->lambang->id)) {
            $this->lambang->increment('views');
            session()->put('viewed_' . $this->lambang->id, true);
        }
        return view('livewire.lambang', $data);
    }
}
