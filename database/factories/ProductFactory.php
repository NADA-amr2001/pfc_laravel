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
        $title = $faker->sentence();
        return [
            //
            "title" => $title,
            "slug" =>Str::slug($title),
            "description" => $faker->paragraph,
            "price" => $faker->numberBetween($min = 100, $max=10000),
            "old_price" => $faker->numberBetween($min = 100, $max=10000),
            "inStock" => $faker->numberBetween($min = 1, $max=100),
            "image" => $faker->imageUrl($width = 640, $height = 480),
            "categoru_id" => $faker->numberBetween($min = 1, $max = 3)
        ];
    }
}
