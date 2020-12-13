<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Category;
use App\Models\CategoryAttr;
use App\Models\Customer;
use App\Models\Product;
use App\Models\ProductAttr;
use App\Models\ProductImage;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    protected $categories = ['men', 'women', 'children'];
    protected $providers = ['cod', 'payment'];
    protected $attrs = ['Colors', 'Sizes'];
    protected $colors = ['Red', 'Green', 'Blue', 'Purple'];
    protected $sizes = ['Small', 'Medium', 'Large', 'Extra Large'];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        Customer::create([
            'name' => 'customer1',
            'email' => 'customer1@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'phone' => '0123123123',
            'address' => 'Hue',
        ]);

        Customer::create([
            'name' => 'customer2',
            'email' => 'customer2@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
            'phone' => '0123123123',
            'address' => 'Hue',
        ]);

        Customer::factory(15)->create();

        foreach ($this->categories as  $category) {
            Category::create(['name' => $category, 'slug' => Str::slug($category), 'meta_title' => $category]);
        }

        $color_id = Attribute::create(['attr_name' => $this->attrs[0]]);
        $size_id = Attribute::create(['attr_name' => $this->attrs[1]]);

        foreach ($this->colors as  $color) {
            AttributeValue::create(['attr_value' => $color, 'attribute_id' => $color_id->id]);
        }

        foreach ($this->sizes as  $size) {
            AttributeValue::create(['attr_value' => $size, 'attribute_id' => $size_id->id]);
        }

        foreach ($this->providers as  $provider) {
            Provider::create(['method' => $provider]);
        }
        for ($category_id = 1; $category_id < 4; $category_id++) {
            for ($attr_id = 1; $attr_id < 3; $attr_id++) {
                CategoryAttr::create(['category_id' => $category_id, 'attribute_id' => $attr_id]);
            }
        }


        for ($i = 0; $i < 30; $i++) {
            $product = Product::factory()->create();
            ProductImage::create(['product_id' => $product->id, 'path' => 'https://via.placeholder.com/350x250']);
            for ($attr_value_id = 1; $attr_value_id < 9; $attr_value_id++) {
                ProductAttr::create(['attribute_value_id' => $attr_value_id, 'product_id' => $product->id]);
            }
        }
    }
}
