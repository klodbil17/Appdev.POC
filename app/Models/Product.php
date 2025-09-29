<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'stock', 'is_archived'];

    public static function boot()
    {
        parent::boot();

        // Automatically archive product when stock hits 0
        static::saving(function ($product) {
            if ($product->stock <= 0) {
                $product->is_archived = true;
            }
        });
    }
}
