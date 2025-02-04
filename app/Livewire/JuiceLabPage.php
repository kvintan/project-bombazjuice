<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class JuiceLabPage extends Component
{
    public $fruit1;
    public $fruit2;
    public $fruit3;

    public function saveOrder() {
        $description = implode('• ', array_filter([$this->fruit1, $this->fruit2, $this->fruit3]));

        Product::create([
            'name' => 'Custom Juice',
            'description' => $description
        ]);

        session()->flash('message', 'Order successfully saved!');
    }
    
    public function render()
    {
        return view('livewire.juice-lab-page');
    }
}
