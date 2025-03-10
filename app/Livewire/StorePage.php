<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Store - BomBazJuice')]
class StorePage extends Component
{
    public function render()
    {
        return view('livewire.store-page');
    }
}
