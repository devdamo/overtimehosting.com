<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServerRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'node_id', 'egg_name', 'ram', 'cpu', 'storage', 'reason', 'server_id',
    ];

    // Relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
