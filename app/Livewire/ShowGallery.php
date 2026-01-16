<?php

namespace App\Livewire;

use App\Models\Gallery;
use Livewire\Component;

class ShowGallery extends Component
{
    public $gallery;

    public function mount(Gallery $gallery)
    {
        $this->gallery = $gallery;
    }

    public function render()
    {
        return view('livewire.show-gallery');
    }
}
