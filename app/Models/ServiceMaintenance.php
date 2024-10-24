<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceMaintenance extends Model
{
    protected $fillable = [
        'service_name',
        'reason',
        'priority',
        'start_date',
        'end_date',
    ];
}
