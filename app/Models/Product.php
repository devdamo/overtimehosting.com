<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use App\Models\ProductReview;


class Product extends Model
{
    // Other model methods and properties

    // Define the relationship with ProductReview
    public function productReviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    // Calculate the average rating of product reviews
    public function averageRating()
    {
        return $this->productReviews()->avg('stars');
    }

    use Searchable;

    protected $fillable = [
        'name', 'price', 'logo', 'bg_logo', 'product_description', 'features', 'important_info',
        'long_description', 'quick_description', 'star_rating', 'sale', 'cpu', 'seller', 'buy_now_url', 'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Define the fields that should be indexed by Algolia
    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'price' => $this->price,
            'cpu' => $this->cpu,
            'seller' => $this->seller,
            'star_rating' => $this->star_rating,
            'product_description' => $this->product_description,
            'quick_description' => $this->quick_description,
        ];
    }
}

