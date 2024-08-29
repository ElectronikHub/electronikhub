<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        $products= Product::where('is_featured', 1)->get();
        return view('livewire.home-page', [
            'products' => $products

        ]);
    }
}
