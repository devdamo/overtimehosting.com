<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'description', 'logo', 'services', 'main_activities'];

    protected $casts = [
        'services' => 'array',
        'main_activities' => 'array',
    ];
}

