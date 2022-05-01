<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'product_name '=> $faker->sentence,
            'qty '=> $faker->numberBetween($min = 1, $max=10),
            'price' => $faker->numberBetween($min = 100, $max=10000),
            'total '=> $faker->numberBetween($min = 100, $max=100000),
            'user_id '=> $faker->numberBetween($min = 1, $max = 3)
        ];
    }
}
