<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reviews>
 */
class ReviewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = $this-> faker->unique();
        return [
            "user_id"=>random_int(1,10),
            "product_id"=>random_int(1,10),
            "message" => $this->faker->message
        ];
    }
}
