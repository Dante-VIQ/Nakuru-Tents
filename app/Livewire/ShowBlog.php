<?php

namespace App\Livewire;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class ShowBlog extends Component
{
    public $galleries;

    public function mount()
    {
        $this->galleries = Gallery::where('is_active', true)
            ->latest()
            ->get()
            ->map(function ($gallery) {
                // Decode JSON if not already decoded
                if (is_string($gallery->images)) {
                    $gallery->images = json_decode($gallery->images, true) ?? [];
                }
                return $gallery;
            });
    }

    
    public function render()
    {

        return view('livewire.show-blog');
    }
}
