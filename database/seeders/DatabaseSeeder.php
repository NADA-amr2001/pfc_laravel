<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         $randArray = [null, 1, 2, 3, 4, 5, 10, 15, 32];
         \App\Models\Category::factory(10)->create()->each( function ($category) use ($randArray){
            $category->save();
         });
         \App\Models\Product::factory(10)->create();
         \App\Models\Order::factory(10)->create();
        // \App\Models\Admin::factory(10)->create();
       /*  $this->call(UsersTbleSeeder::class);
         $this->call(CategorySeeder::class);
         $this->call(ProductSeeder::class);
         $this->call(OrderSeeder::class);
         $this->call(AdminTbleSeeder::class);*/
    }
}
