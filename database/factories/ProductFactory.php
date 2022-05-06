<?php

namespace Database\Factories;
use App\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
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
            'title' => $this->faker->title,
            //'slug '=>Str::slug($title),
            'description '=> $this->faker->paragraph,
            'price '=> $this->faker->numberBetween($min = 100, $max=10000),
            'old_price '=> $this->faker->numberBetween($min = 100, $max=10000),
            'in-stock '=> $this->faker->numberBetween($min = 1, $max=100),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'categor_id '=> $this->faker->numberBetween($min = 1, $max = 3)
        ];
    }
}
