<?php

namespace App\Livewire;
use App\Models\Product;
use App\Models\Gallery;
use Livewire\Component;

class ShowHeader extends Component
{
    public $heroImages = [];

    public function mount()
    {
        $this->loadHeroImages();
    }

    private function loadHeroImages()
    {
        // Get active products with images
        $products = Product::where('is_active', true)
            ->whereNotNull('images')
            ->inRandomOrder()
            ->take(5)
            ->get()
            ->flatMap(function ($product) {
                $images = is_array($product->images) ? $product->images : json_decode($product->images, true);
                if (!is_array($images) || empty($images)) {
                    return collect();
                }

                return collect($images)
                    ->take(2)
                    ->map(function ($image) use ($product) {
                        return [
                            'type' => 'product',
                            'url' => asset('uploads/' . $image),
                            'title' => $product->name,
                            'description' => $product->short_description ?? $product->description,
                            'link' => route('products.show', $product->slug ?? $product->id),
                            'category' => $product->category ?? 'Product',
                        ];
                    });
            });

        // Get active galleries with images
        $galleries = Gallery::where('is_active', true)
            ->whereNotNull('images')
            ->inRandomOrder()
            ->take(5)
            ->get()
            ->flatMap(function ($gallery) {
                $images = is_array($gallery->images) ? $gallery->images : json_decode($gallery->images, true);
                if (!is_array($images) || empty($images)) {
                    return collect();
                }

                return collect($images)
                    ->take(2)
                    ->map(function ($image) use ($gallery) {
                        return [
                            'type' => 'gallery',
                            'url' => asset('uploads/' . $image),
                            'title' => $gallery->title,
                            'description' => $gallery->description,
                            'link' => route('gallery.show', $gallery->slug ?? $gallery->id),
                            'category' => ucfirst($gallery->category),
                        ];
                    });
            });

        // Merge, shuffle, and limit
        $this->heroImages = $products->merge($galleries)->shuffle()->take(6)->values()->all();
    }

    public function render()
    {
        return view('livewire.show-header');
    }
}
