<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
	    'name' => "Limon",
	    'description' => "Loren ipsum dolor tehjyt hepsum",
	    'image' => "https://static9.depositphotos.com/1642482/1148/i/600/depositphotos_11489401-stock-photo-orange-fruit.jpg",
	    'price' => 2000,
	    'requested_amount' => 0,
	    'is_milligram' => 1,
	    'is_unit' => 0
	];
    }
}
