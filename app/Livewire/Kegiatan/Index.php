<?php

namespace App\Livewire\Kegiatan;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Kegiatan | Website Resmi PEMKAB Mamasa')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.kegiatan.index');
    }
}
