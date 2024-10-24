<?php

// app/Models/Advertisement.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'title', 'subtitle', 'content', 'image_url',
        'cta_text', 'cta_url', 'location', 'show_globally'
    ];
}
