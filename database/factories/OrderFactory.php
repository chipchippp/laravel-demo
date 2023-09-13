<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
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
            'user_id' => $user_id,
            'grand_total' => random_int(1,10),
            'status' =>$this->faker->text(500)
        ];
    }
}
