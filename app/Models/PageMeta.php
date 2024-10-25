<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageMeta extends Model
{
    protected $fillable = ['page_id', 'key', 'value'];

    public function page()
    {
        return $this->belongsTo(Pages::class);
    }
}
