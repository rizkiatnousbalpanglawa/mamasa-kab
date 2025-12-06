<?php

namespace App\Livewire;

use App\Models\Pemerintah;
use Livewire\Component;

class Pemerintahan extends Component
{
    public $pemerintahan;

    public function render()
    {
        $data['pemerintahan'] = Pemerintah::first();
        $this->pemerintahan = Pemerintah::first();
        if ($this->pemerintahan) {
            if (!session()->has('viewed_' . $this->pemerintahan->id)) {
                $this->pemerintahan->increment('views');
                session()->put('viewed_' . $this->pemerintahan->id, true);
            }
        }
        return view('livewire.pemerintahan');
    }
}
