<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Sejarah | Website Resmi PEMKAB Mamasa')]
class Sejarah extends Component
{
    public function render()
    {
        return view('livewire.sejarah');
    }
}
