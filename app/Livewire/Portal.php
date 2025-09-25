<?php

namespace App\Livewire;

use App\Models\Portal as ModelsPortal;
use App\Models\PortalMenu;
use App\Models\WebOpd;
use Livewire\Component;

class Portal extends Component
{
    public $portals, $menu, $webOpd;

    public function mount()
    {
        $this->portals = ModelsPortal::first();
        $this->menu = PortalMenu::get();
        $this->webOpd = WebOpd::get();
    }

    public function render()
    {
        return view('livewire.portal')->layout('layouts.portal');
    }
}
