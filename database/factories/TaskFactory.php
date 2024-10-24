<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Column;
use App\Models\User;

class TaskFactory extends Factory
{
    public function definition()
    {
        return [
            'column_id' => Column::factory(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl,
            'user_id' => User::factory(),
        ];
    }
}
