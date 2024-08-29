<?php

namespace App\Livewire\Partials;

use App\Models\Product;
use Livewire\Component;

class Searchbar extends Component
{

    public $search= "";
    public function render()
    {

        $results = [];

        if(strlen($this->search) >= 1) {
            $results = Product::where('slug', 'like', '%'.$this->search. '%') -> limit(7)->get();
        }
        return view('livewire.partials.searchbar', [
            'products' => $results
        ]);
    }
}
