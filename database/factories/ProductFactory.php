<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => rand(1, 3),
            'name' => $title = 'Product_' . rand(10000, 99999),
            'meta_title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph(3),
            'price' => rand(400000, 1500000),
            'is_new' => rand(0, 1),
        ];
    }
}
