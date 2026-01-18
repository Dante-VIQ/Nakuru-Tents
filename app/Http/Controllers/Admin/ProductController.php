<?php
// app/Http/Controllers/Admin/ProductController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10)->map(function ($product) {
                // Decode JSON if not already decoded
                if (is_string($product->images)) {
                    $product->images = json_decode($product->images, true) ?? [];
                }
                return $product;
            });
        return view('admin.products.index', compact('products'));

    }

    public function create()
    {
        $productTypes = Product::getTypes();
        return view('admin.products.create', compact('productTypes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:tent,canvas,accessory,service',
            'description' => 'required|string',
            'specifications' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock_quantity' => 'required|integer|min:0',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'is_active' => 'boolean'
        ]);

        // Generate slug
        $validated['slug'] = Str::slug($validated['name'] . '-' . time());

        // Handle image uploads
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public_direct');
                            $relativePath = str_replace('uploads/', '', $path);
                $imagePaths[] = $relativePath;
            }
            $validated['images'] = json_encode($imagePaths);
        }

        // Set default values
        $validated['is_active'] = $request->has('is_active');

        // Create product
        Product::create($validated);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $productTypes = Product::getTypes();
        return view('admin.products.edit', compact('product', 'productTypes'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:tent,canvas,accessory,service',
            'description' => 'required|string',
            'specifications' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock_quantity' => 'required|integer|min:0',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'is_active' => 'boolean'
        ]);

        // Update slug if name changed
        if ($product->name !== $validated['name']) {
            $validated['slug'] = Str::slug($validated['name'] . '-' . time());
        }

        // Handle image uploads
        if ($request->hasFile('images')) {
            // Delete old images
            if ($product->images) {
                foreach ($product->images as $oldImage) {
                    Storage::disk('public_direct')->delete($oldImage);
                }
            }
            
            // Upload new images
            foreach ($request->file('images') as $image) {
                $imagePaths = [];
                $path = $image->store('products', 'public_direct');
                              $relativePath = str_replace('uploads/', '', $path);
                $imagePaths[] = $relativePath;
            }
             $validated['images'] = json_encode($imagePaths);
        } else {
            // Keep existing images if no new ones uploaded
            $validated['images'] = $product->images;
        }

        // Handle checkbox
        $validated['is_active'] = $request->has('is_active');

        // Update product
        $product->update($validated);

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        // Delete associated images
        if ($product->images) {
            foreach ($product->images as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }

    public function updateStatus(Request $request, Product $product)
    {
        $request->validate([
            'is_active' => 'required|boolean'
        ]);

        $product->update(['is_active' => $request->is_active]);

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.'
        ]);
    }
}