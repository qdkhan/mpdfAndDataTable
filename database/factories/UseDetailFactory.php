<?php

namespace Database\Factories;

use App\Models\UseDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UseDetail>
 */
class UseDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = UseDetail::class;
    public function definition(): array
    {
         return [
            'city' => $this->faker->city(),
            'mobile' => $this->faker->phoneNumber(),
        ];
    }
}
