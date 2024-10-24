<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Pages;

class UniqueSlug implements Rule
{
    protected $ignoreId;

    public function __construct($ignoreId = null)
    {
        $this->ignoreId = $ignoreId;
    }

    public function passes($attribute, $value)
    {
        $query = Pages::where('slug', $value);

        if ($this->ignoreId) {
            // Ignore the record with this ID (for updates)
            $query->where('id', '!=', $this->ignoreId);
        }

        return !$query->exists();
    }

    public function message()
    {
        return 'The slug must be unique.';
    }
}
