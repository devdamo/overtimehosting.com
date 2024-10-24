<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Webhook extends Model
{
    // Allow the 'webhook_url' field to be mass assigned
    protected $fillable = ['webhook_url'];
}
