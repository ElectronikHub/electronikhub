<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsPage extends Component
{

    use WithPagination;
    #[Url]
    public $search = 'mq';

    #[Url]
    public $selected_categories = [];
    #[Url]
    public $selected_brands = [];


    public function render()
    {
        $products = Product::query()->where('is_active', 1);

        if(!empty($this->selected_categories)) {
            $products -> whereIn('category_id', $this->selected_categories);
        }

        if(!empty($this->selected_brands)) {
            $products -> whereIn('brand_id', $this->selected_brands);
        }


        return view('livewire.products-page',

        [
            'products'=> $products->paginate(9),
            'brands' => Brand::query()->where('is_active',1)->get(['id','name','slug']),
            'categories' => Category::query()->where('is_active',1)->get(['id','name', 'slug'])
        ]);
    }
}
