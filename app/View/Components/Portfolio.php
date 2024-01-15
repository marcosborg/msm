<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\ProductCategory;
use App\Models\Product;

class Portfolio extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        $product_categories = ProductCategory::all();
        $products = Product::all()->load('categories');

        return view('components.portfolio', compact('product_categories', 'products'));
    }
}
