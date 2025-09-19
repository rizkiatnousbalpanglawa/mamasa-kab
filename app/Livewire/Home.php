<?php

namespace App\Livewire;

use App\Models\BerandaInfoKegiatan;
use App\Models\BerandaSlider;
use App\Models\BerandaSusunanKegiatan;
use App\Models\Berita;
use App\Models\StatistikHarian;
use App\Models\StatistikOnline;
use Carbon\Carbon;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Mamasa | Website Resmi PEMKAB Mamasa')]
class Home extends Component
{
    public function render()
    {
        $data['carousels'] = BerandaSlider::get();
        $data['kegiatan'] = BerandaInfoKegiatan::first();
        $data['susunanKegiatan'] = BerandaSusunanKegiatan::get();
        $data['berita'] = Berita::with(['penulis'])->get();
        return view('livewire.home', $data);
    }
}
