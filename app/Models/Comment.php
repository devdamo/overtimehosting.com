<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Translation\t;

class Comment extends Model
{
    use HasFactory;

    // Updated to use polymorphic relationship with 'commentable_type' and 'commentable_id'
    protected $fillable = [
        'commentable_id',
        'commentable_type',
        'user_id',
        'content',
        'news_id'
    ];

    // Define the polymorphic relationship
    public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
