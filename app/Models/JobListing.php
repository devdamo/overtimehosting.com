<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable = [
        'category_id', 'title', 'image_path', 'short_description', 'full_description', 'job_type',
        'pay', 'additional_pay', 'benefits', 'schedule', 'work_location',
    ];

    public function category()
    {
        return $this->belongsTo(JobCategory::class, 'category_id');
    }

}
