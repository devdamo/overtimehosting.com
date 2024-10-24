<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable = ['parent_id', 'slug', 'order', 'title', 'content'];

    public function metas()
    {
        return $this->hasMany(PageMeta::class);
    }

    public function parent()
    {
        return $this->belongsTo(Pages::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Pages::class, 'parent_id');
    }
}

