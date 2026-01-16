<?php
// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'type', // Tent, Canvas, Accessory, etc.
        'description',
        'specifications',
        'price',
        'stock_quantity',
        'images',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean',
        'images' => 'array'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function getFormattedPriceAttribute()
    {
        return '₹' . number_format($this->price, 2);
    }

    public function getPrimaryImageAttribute()
    {
        if (!empty($this->images) && is_array($this->images)) {
            return $this->images[0] ?? null;
        }
        return null;
    }

    // Simple product types for tents and canvas company
    public static function getTypes()
    {
        return [
            'tent' => 'Tents',
            'canvas' => 'Canvas Products',
            'accessory' => 'Accessories',
            'service' => 'Services'
        ];
    }
}