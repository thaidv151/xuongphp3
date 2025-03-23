<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Process\FakeProcessResult;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'price' =>  $this->faker->randomNumber(),
            'stock' => $this->faker->randomNumber(),
            'category_id' => Category::inRandomOrder()->first()->id ?? 1,
            'img_url' => $this->faker->url(),
        ];
    }
}
