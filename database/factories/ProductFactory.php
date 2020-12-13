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
            'brand_id' => rand(1, 5),
            'sku' => Str::upper(Str::random(20)),
            'name' => $title = 'Product_' . Str::upper(Str::random(10)),
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph(3),
            'quantity' => rand(1000, 4000),
            'weight' => rand(1, 3),
            'price' => rand(400000, 1500000),
            'is_new' => rand(0, 1),
        ];
    }
}
