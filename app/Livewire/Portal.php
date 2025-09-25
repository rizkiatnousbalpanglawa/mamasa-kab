<?php

namespace App\Livewire;

use App\Models\Portal as ModelsPortal;
use App\Models\PortalMenu;
use App\Models\WebOpd;
use Livewire\Component;

class Portal extends Component
{
    public $portals, $menu, $webOpd, $pencarian = "";

    public function mount()
    {
        $this->portals = ModelsPortal::first();
        $this->menu = PortalMenu::get();

        $query = WebOpd::query();

        if ($this->pencarian) {
            $query->where('nama', 'LIKE', '%' . $this->pencarian . '%');
        }

        $this->webOpd = WebOpd::get();
    }

    public function render()
    {
        return view('livewire.portal')->layout('layouts.portal');
    }
}
