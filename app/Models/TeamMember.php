<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'slug', 'username', 'display_name', 'company_role', 'logo', 'about_me', 'links'
    ];

    // Casting 'links' to an array
    protected $casts = [
        'links' => 'array',
    ];
}
