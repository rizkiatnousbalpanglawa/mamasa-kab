<?php

namespace App\Livewire;

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

        return view('livewire.home');
    }
}
