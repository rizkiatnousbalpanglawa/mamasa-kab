<?php

namespace App\Livewire\Berita;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Berita | Website Resmi PEMKAB Mamasa')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.berita.index');
    }
}
