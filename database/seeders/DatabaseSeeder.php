<?php

namespace Database\Seeders;

use Database\Factories\CategoryFactory;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // App\Models\User::factory()->count(10)->create();

        // App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $categories = factory(CategoryFactory::class, 50)->create()->toArray();
        factory(ProductFactory::class, 500)->make()->each(function ($product) use ($categories) {
            $product->category_id = Arr::random($categories)['id'];
            $product->save();
        });
    }
}
