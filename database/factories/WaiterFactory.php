<?php

namespace Database\Factories;

use App\Models\Waiter;
use App\Models\Restaurant;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class WaiterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Waiter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'restaurant_id' => Restaurant::factory(),
            'fullname' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'phone_number' => $this->faker->phoneNumber(),
            'pin' => Str::random(6),
            'profile_pic' => null,
            'employment_type' => $this->faker->randomElement(['casual','part-time','full-time']),
            'on_shift' => $this->faker->randomElement(['yes', 'no'])
        ];
    }
}
