<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameArticle extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',        // The ID of the creator (Author)
        'title',          // Title of the article
        'description',    // Description of the article
        'category',       // The game category (e.g., Minecraft, Rust)
        'how_long_to_read',      // Estimated time to read
        'markdown_body',  // The content of the article
        'bg_image',       // Background image
        'slug',           // URL slug for the article
        'created_at',     // Date the article was created
    ];

    // Relationship with User (Author)
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Method to retrieve all articles by category
    public static function byCategory($category)
    {
        return self::where('category', $category)->get();
    }
}
