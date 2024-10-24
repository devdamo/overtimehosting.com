<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;

    protected $table = 'faq_articles';

    protected $fillable = [
        'question', // The FAQ question
        'answer',   // The corresponding answer
        'created_at'
    ];
}
