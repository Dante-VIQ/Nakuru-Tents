<?php
// app/Http/Controllers/GalleryController.php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $query = Gallery::active();
        
        // Category filter
        if ($request->has('category')) {
            $query->where('category', $request->category);
        }
        
        // Search filter
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%");
            });
        }
        
        $galleries = $query->orderBy('sort_order')->orderBy('created_at', 'desc')->paginate(12);
        $categories = Gallery::getCategories();
        
        return view('gallery.index', compact('galleries', 'categories'));
    }
    
    public function show($slug)
    {
        $gallery = Gallery::where('slug', $slug)->active()->firstOrFail();
        
        // Get related galleries
        $relatedGalleries = Gallery::where('category', $gallery->category)
                                  ->where('id', '!=', $gallery->id)
                                  ->active()
                                  ->inRandomOrder()
                                  ->limit(3)
                                  ->get();
        
        return view('gallery.show', compact('gallery', 'relatedGalleries'));
    }
}