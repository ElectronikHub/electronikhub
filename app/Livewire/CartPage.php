<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Cart - Electronik Hub')]

class CartPage extends Component
{

    // public $quantity = ;
    public $cart_items = [];
    public $grand_total;

    // public function increment() {
    //     $this -> quantity++;
    // }

    // public function decrement() {
    //     if ($this->quantity > 1) {
    //         $this -> quantity--;
    //     }

    // }

    public function mount() {
        $this->cart_items = CartManagement::getCartItemsFromCookie();
        $this->grand_total = CartManagement::grandTotal($this->cart_items);
    }

    public function removeItem($product_id) {
        $this->cart_items = CartManagement::removeCartItem($product_id);
        $this->grand_total = CartManagement::grandTotal($this->cart_items);

    }

    public function increment($product_id) {
        $this->cart_items = CartManagement::incrementQuantity($product_id);
        $this->grand_total = CartManagement::grandTotal($this->cart_items);

    }

    public function decrement($product_id) {
        $this->cart_items = CartManagement::decrementQuantity($product_id);
        $this->grand_total = CartManagement::grandTotal($this->cart_items);

    }
    public function render()
    {
        return view('livewire.cart-page');
    }
}
