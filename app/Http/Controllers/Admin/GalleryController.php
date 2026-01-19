<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::where('is_active', true)
            ->latest()
            ->get()
            ->map(function ($gallery) {
                // Decode JSON if not already decoded
                if (is_string($gallery->images)) {
                    $gallery->images = json_decode($gallery->images, true) ?? [];
                }
                return $gallery;
            });
        $categories = Gallery::getCategories();

        return view('Admin.gallery.index', compact('galleries', 'categories'));
    }

    public function create()
    {
        $categories = Gallery::getCategories();
        return view('Admin.gallery.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:tents,events,camping,projects,custom,team',
            'description' => 'nullable|string',
            'images' => 'required|array|min:1',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'is_active' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']) . '-' . Str::random(6);

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('gallery', 'public_direct');
                // Store relative path without 'uploads/' prefix
                $relativePath = str_replace('uploads/', '', $path);
                $imagePaths[] = $relativePath;
            }
            $validated['images'] = json_encode($imagePaths);
        }

        $validated['is_active'] = $request->boolean('is_active');

        Gallery::create($validated);

        return redirect()->route('gallery.index')->with('success', 'Gallery created successfully.');
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        $categories = Gallery::getCategories();
        // Load gallery images - adjust based on your relationship
        $galleries = $gallery->images; // or GalleryImage::where('gallery_id', $id)->get();

        return view('Admin.gallery.edit', compact('gallery', 'galleries', 'categories'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:tents,events,camping,projects,custom,team',
            'description' => 'nullable|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'is_active' => 'boolean',
        ]);

        // Update slug if title changed
        if ($gallery->title !== $validated['title']) {
            $validated['slug'] = Str::slug($validated['title']) . '-' . Str::random(6);
        }

        // Handle new image uploads
        if ($request->hasFile('images')) {
            // Delete old images
            // if ($gallery->images) {
            //     foreach ($gallery->images as $oldImage) {
            //         Storage::disk('public_direct')->delete($oldImage);
            //     }
            // }

            // Upload new images
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('gallery', 'public_direct');
                // Store relative path without 'uploads/' prefix
                $relativePath = str_replace('uploads/', '', $path);
                $imagePaths[] = $relativePath;
            }
            $validated['images'] = json_encode($imagePaths);
        } else {
            // Keep existing images
            $validated['images'] = $gallery->images;
        }

        // Update gallery
        $gallery->update($validated);

        return redirect()->route('gallery.index')->with('success', 'Gallery updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        // Delete associated images
        // if ($gallery->images) {
        //     foreach ($gallery->images as $image) {
        //         Storage::disk('public')->delete($image);
        //     }
        // }

        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gallery deleted successfully.');
    }

    public function updateStatus(Request $request, Gallery $gallery)
    {
        $request->validate([
            'is_active' => 'required|boolean',
        ]);

        $gallery->update(['is_active' => $request->is_active]);

        return response()->json(['success' => true]);
    }
}
