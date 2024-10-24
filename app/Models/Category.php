<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'image',
    ];

    // Define the relationship with products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

