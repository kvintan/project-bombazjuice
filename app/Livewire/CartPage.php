<?php

namespace App\Livewire;

use Stripe\Stripe;
use App\Models\Order;
use Livewire\Component;
use Stripe\Checkout\Session;
use Livewire\Attributes\Title;
use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

#[Title('Cart Page - BomBazJuice')]
class CartPage extends Component
{
    use LivewireAlert;
    
    public $cart_items = [];
    public $grand_total;
    public $payment_method;

    public function mount() {
        $this->cart_items = CartManagement::getCartItemsFromCookie();
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
    }

    public function removeItem($product_id) {
        $this->cart_items = CartManagement::removeCartItem($product_id);
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
        $this->dispatch('update-cart-count', total_count: count($this->cart_items))->to(Navbar::class);

        $this->alert('success', 'Product remove from the cart successfully!', [
            'position' => 'bottom-end',
            'timer' => 3000,
            'toats' => true,
        ]);
    }

    public function increaseQty($product_id) {
        $this->cart_items = CartManagement::incremenetQuantityToCartItem($product_id);
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
    }

    public function decreaseQty($product_id) {
        $this->cart_items = CartManagement::decrementQuantityToCartItem($product_id);
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
    }
    
    public function render()
    {
        return view('livewire.cart-page');
    }
}