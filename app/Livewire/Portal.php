<?php

namespace App\Livewire;

use App\Models\Portal as ModelsPortal;
use App\Models\PortalMenu;
use App\Models\WebOpd;
use Livewire\Component;

class Portal extends Component
{
    public $portals;

    public $menu;

    public $webOpd;

    public $pencarian = '';

    public function mount()
    {
        $this->portals = ModelsPortal::first();
        $this->menu = PortalMenu::get();
        $this->loadWebOpd();
    }

    public function updatedPencarian(): void
    {
        $this->loadWebOpd();
    }

    protected function loadWebOpd(): void
    {
        $keyword = trim((string) $this->pencarian);

        $this->webOpd = WebOpd::query()
            ->when(
                $keyword !== '',
                fn ($query) => $query
                    ->where('nama', 'LIKE', "%{$keyword}%")
                    ->orWhere('subnama', 'LIKE', "%{$keyword}%")
            )
            ->orderBy('nama')
            ->get();
    }

    public function render()
    {
        return view('livewire.portal')->layout('layouts.portal');
    }
}
