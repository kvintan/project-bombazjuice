<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('FruitStats - BomBazJuice')]
class FruitStatsPage extends Component
{
    public function render()
    {
        return view('livewire.fruit-stats-page');
    }
}
