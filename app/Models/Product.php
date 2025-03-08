<?php

namespace App\Models;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'images',
        'description',
        'price',
        'is_active',
        'is_featured',
        'in_stock'
    ];

    protected $casts = [
        'images' => 'array',
        'description' => 'string',
    ];

    public function orderItems() {
        return $this->hasMany(OrderItem::class);
    }
    //
}
