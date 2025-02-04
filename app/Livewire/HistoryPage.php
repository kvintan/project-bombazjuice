<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;

#[Title('History - BomBazJuice')]
class HistoryPage extends Component
{
    public function render()
    {
        $history = Order::where('user_id', Auth::id())->latest()->paginate(2);
        
        return view('livewire.history-page', [
            'orders' => $history,
        ]);
    }
}
