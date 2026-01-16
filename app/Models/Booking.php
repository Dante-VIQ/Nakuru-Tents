<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['full_name', 'phone', 'product_id', 'quantity', 'total_price', 'notes', 'status'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
