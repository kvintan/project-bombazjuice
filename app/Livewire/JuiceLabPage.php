<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Title;
use App\Livewire\Partials\Navbar;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Helpers\CartManagement; // Assuming CartManagement handles the cart

#[Title('JuiceLab - BomBazJuice')]
class JuiceLabPage extends Component
{
    use LivewireAlert;
    
    public $fruit1;
    public $fruit2;
    public $fruit3;
    public $selectedFruits = [];

    // Select fruits for custom juice
    public function selectFruit($fruit)
    {
        $fruits = array_filter([$this->fruit1, $this->fruit2, $this->fruit3]);

        if (in_array($fruit, $fruits)) {
            // If already selected, remove it
            $fruits = array_diff($fruits, [$fruit]);
        } elseif (count($fruits) < 3) {
            // If not selected and there's space, add it
            $fruits[] = $fruit;
        }

        // Assign values back
        $this->fruit1 = $fruits[0] ?? null;
        $this->fruit2 = $fruits[1] ?? null;
        $this->fruit3 = $fruits[2] ?? null;

        // Update selectedFruits array for hidden inputs
        $this->selectedFruits = array_values($fruits);
    }

    // Clear fruit selections
    public function clearSelection()
    {
        $this->fruit1 = null;
        $this->fruit2 = null;
        $this->fruit3 = null;
        $this->selectedFruits = [];
    }

    // Save custom order (custom juice) and add to cart
    public function saveOrder()
    {
        $description = implode(' • ', array_filter([$this->fruit1, $this->fruit2, $this->fruit3]));
        
        // Generate a unique slug for the custom juice
        $slug = Str::slug('Custom Juice ' . $description);
        $originalSlug = $slug;
        $count = 1;
        $imagePath = 'products/botol-kosong.svg';

        while (Product::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        // Create the custom juice product
        $product = Product::create([
            'name' => 'Custom Juice',
            'description' => $description,
            'slug' => $slug,
            'price' => '60000', // You can adjust the price as needed
            'images' => $imagePath,
        ]);

        // Add the custom juice to the cart after it's saved
        $this->addToCart($product->id);

        // Flash success message
        session()->flash('message', 'Order successfully saved and added to cart!');
    }

    // Add the product to the cart
    public function addToCart($product_id)
    {
        // Use the CartManagement helper to add the item to the cart
        $total_count = CartManagement::addItemToCart($product_id);

        // Optionally, dispatch an event to update cart count in Navbar (if you use Navbar component)
        $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);

        // Show success message
        $this->alert('success', 'Product added to the cart successfully!', [
            'position' => 'bottom-end',
            'timer' => 3000,
            'toats' => true,
        ]);
    }

    // Render the view
    public function render()
    {
        return view('livewire.juice-lab-page');
    }
}
