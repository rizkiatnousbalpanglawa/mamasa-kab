<?php

namespace App\Livewire;

use App\Models\VisiMisi as ModelsVisiMisi;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Visi & Misi | Website Resmi PEMKAB Mamasa')]
class Visimisi extends Component
{
    public $visiMisi;

    public function render()
    {
        $data['visiMisi'] = ModelsVisiMisi::first();
        $this->visiMisi = ModelsVisiMisi::first();
        if (!session()->has('viewed_' . $this->visiMisi->id)) {
            $this->visiMisi->increment('views');
            session()->put('viewed_' . $this->visiMisi->id, true);
        }
        return view('livewire.visimisi', $data);
    }
}
