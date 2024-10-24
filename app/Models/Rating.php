<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = ['news_id', 'stars'];

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
