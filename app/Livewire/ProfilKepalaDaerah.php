<?php

namespace App\Livewire;

use App\Models\ProfilPimpinanDaerah;
use Livewire\Component;

class ProfilKepalaDaerah extends Component
{
    public function render()
    {
        $data['pejabat'] = ProfilPimpinanDaerah::get();
        return view('livewire.profil-kepala-daerah', $data);
    }
}
