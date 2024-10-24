<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category; // Assuming this is for products/games
use App\Models\JobCategory; // For job categories

class CategoryNavigation extends Component
{
    public $categories;
    public $type;

    public function __construct($type = 'product')
    {
        $this->type = $type;

        // Load categories based on the type
        if ($type === 'job') {
            $this->categories = JobCategory::all();
        } else {
            $this->categories = Category::all(); // Assuming the table for products/games is 'categories'
        }
    }

    public function render()
    {
        return view('components.category-navigation');
    }
}
