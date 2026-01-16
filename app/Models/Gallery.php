<?php
// app/Models/Gallery.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'category',
        'images',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'images' => 'array',
        'is_active' => 'boolean'
    ];

    // Gallery categories for the business
    public static function getCategories()
    {
        return [
            'tents' => 'Tents & Shelters',
            'events' => 'Event Setup',
            'camping' => 'Camping Gear',
            'projects' => 'Projects',
            'custom' => 'Custom Work',
            'team' => 'Our Team'
        ];
    }

    public function getCategoryLabelAttribute()
    {
        return self::getCategories()[$this->category] ?? ucfirst($this->category);
    }

public function getImagesWithUrlAttribute()
{
    if (!$this->images) {
        return [];
    }
    
    return collect($this->images)->map(function ($relativePath) {
        return [
            'path' => $relativePath,
            'url' => asset('uploads/' . $relativePath)
        ];
    })->toArray();
}

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}
