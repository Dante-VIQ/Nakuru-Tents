<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class RoomCard extends Component
{
    public $products;

    public function mount()
    {
        // $this->products = Product::all();

                $this->products =  Product::where('is_active', true)
            ->latest()
            ->get()
            ->map(function ($product) {
                // Decode JSON if not already decoded
                if (is_string($product->images)) {
                    $product->images = json_decode($product->images, true) ?? [];
                }
                return $product;
            });
    }


    public function render()
    {
        return view('livewire.room-card');
    }
}
