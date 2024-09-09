<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Helpers\CartManagement;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class ProductDetailPage extends Component
{
    use LivewireAlert;

    public $slug;
    public $quantity = 1;
    public function mount($slug) {
        $this->slug = $slug;
    }


    public function increment() {
        $this -> quantity++;
    }

    public function decrement() {
        if ($this->quantity > 1) {
            $this -> quantity--;
        }

    }

    public function addToCart($product_id) {
        $total_count = CartManagement::addCartItemswithQty($product_id, $this->quantity);

        $this->alert('success', 'Added to Cart!', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
           ]);
    }
    public function render()
    {
        return view('livewire.product-detail-page', [
            'product' => Product::where('slug', $this->slug)->firstorfail(),
        ]);
    }
}
