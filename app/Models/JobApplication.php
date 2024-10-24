<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_listing_id', 'first_name', 'last_name', 'email', 'phone', 'location_city',
        'location_country', 'cv_path', 'portfolio_url', 'additional_info',
        'linkedin_profile', 'referral_source', 'work_authorization_uk',
        'located_in_uk', 'education'
    ];

    protected $casts = [
        'education' => 'array',
    ];

    public function jobListing()
    {
        return $this->belongsTo(JobListing::class, 'job_listing_id');
    }
}
