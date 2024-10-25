<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralArticle extends Model
{
    use HasFactory;

    // The attributes that are mass assignable
    protected $fillable = [
        'user_id',        // The ID of the creator (Author)
        'title',          // Title of the article
        'description',    // Description of the article
        'how_long_to_read',      // Estimated time to read
        'markdown_body',  // The content of the article
        'bg_image',       // Background image
        'slug',           // URL slug for the article
        'date_made',     // Date the article was created
    ];

    protected $casts = [
        'date_made' => 'datetime',
    ];

    // Relationship with User (Author)
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
