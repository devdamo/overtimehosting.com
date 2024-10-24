<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\User;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $user = User::first(); // Ensure this returns a user

        if ($user) {
            News::create([
                'user_id' => $user->id,
                'title' => 'First News Article',
                'description' => 'This is the description of the first news article.',
                'body' => 'This is the body content of the first news article. It contains detailed information.',
            ]);

            // Add more news articles if needed...
        } else {
            echo "No user found. Please ensure the UserSeeder has run.";
        }
    }
}
