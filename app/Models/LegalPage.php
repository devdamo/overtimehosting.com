<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'content',
        'effective_date',
    ];

    // In app/Models/LegalPage.php
    protected $casts = [
        'effective_date' => 'date',
    ];

}
