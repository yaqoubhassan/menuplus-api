<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Restaurant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'state' => $this->faker->state(),
            'city' => $this->faker->city(),
            'suburb' => $this->faker->city(),
            'post_code' => rand(1000,9999),
            'address' => $this->faker->streetAddress(),
            'phone_number' => $this->faker->unique()->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'business_type' => $this->faker->randomElement([
                'Cafe & Takeaway',
                'Restaurants',
                'Pubs & Clubs',
                'Hotels & Service Apartments',
            ]),
            'status' => $this->faker->randomElement(['0', '1']),
            'capacity' => $this->faker->randomNumber(3),
            'description' => $this->faker->text(100),
            'logo' => null,
        ];
    }
}
