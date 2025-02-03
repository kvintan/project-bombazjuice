<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[Title('Menu - BomBazJuice')]
class MenuPage extends Component
{
    use LivewireAlert;
    
    use WithPagination;

    public function addToCart($product_id) {
        $total_count = CartManagement::addItemToCart($product_id);

        $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);

        $this->alert('success', 'Product added to the cart successfully!', [
            'position' => 'bottom-end',
            'timer' => 3000,
            'toats' => true,
        ]);
    }

    public function render()
    {
        $allProducts = Product::query()
            ->where('is_active', 1)
            ->get();

        $first12 = $allProducts->slice(0, 12);
        $next8 = $allProducts->slice(12, 8);

        $paginatedProducts = Product::query()
            ->where('is_active', 1)
            ->paginate(20);

        return view('livewire.menu-page', [
            'products' => $paginatedProducts,
            'first12' => $first12,
            'next8' => $next8,
        ]);
    }
}