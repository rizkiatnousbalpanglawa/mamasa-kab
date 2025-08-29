<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Visi & Misi | Website Resmi PEMKAB Mamasa')]
class Visimisi extends Component
{
    public function render()
    {
        return view('livewire.visimisi');
    }
}
