<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph(5),
            'publication_date' => $this->faker->dateTimeBetween('-5 years')
        ];
    }
}
