<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoArticle extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',        // The ID of the creator (Author)
        'title',          // Title of the video article
        'description',    // Description of the video article
        'category',       // Category (e.g., tutorials, guides)
        'read_time',      // Estimated time to read or watch
        'markdown_body',  // The description or article content
        'video_url',      // The URL or file path of the uploaded video
        'bg_image',       // Background image
        'slug',           // URL slug for the article
        'created_at',     // Date the article was created
    ];

    // Relationship with User (Author)
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
