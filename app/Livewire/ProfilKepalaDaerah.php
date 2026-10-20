<?php

namespace App\Livewire;

use App\Models\ProfilPimpinanDaerah;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Profil Pimpinan Daerah | Website Resmi PEMKAB Mamasa')]
class ProfilKepalaDaerah extends Component
{
    public function render()
    {
        $data['pejabat'] = ProfilPimpinanDaerah::get();

        return view('livewire.profil-kepala-daerah', $data);
    }
}
