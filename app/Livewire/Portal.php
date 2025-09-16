<?php

namespace App\Livewire;

use App\Models\Portal as ModelsPortal;
use App\Models\PortalMenu;
use Livewire\Component;

class Portal extends Component
{
    public $portals, $menu;

    public function mount()
    {
        $this->portals = ModelsPortal::first();
        $this->menu = PortalMenu::get();
    }

    public function render()
    {
        return view('livewire.portal')->layout('layouts.portal');
    }
}
