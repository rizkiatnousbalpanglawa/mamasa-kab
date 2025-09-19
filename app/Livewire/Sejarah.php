<?php

namespace App\Livewire;

use App\Models\Sejarah as ModelsSejarah;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Sejarah | Website Resmi PEMKAB Mamasa')]
class Sejarah extends Component
{
    public $sejarah;

    public function render()
    {
        $data['sejarah'] = ModelsSejarah::first();
        $this->sejarah = ModelsSejarah::first();
        if (!session()->has('viewed_' . $this->sejarah->id)) {
            $this->sejarah->increment('views');
            session()->put('viewed_' . $this->sejarah->id, true);
        }
        return view('livewire.sejarah', $data);
    }
}
