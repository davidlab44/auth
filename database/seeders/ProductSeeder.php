<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
	// \App\Models\Product::factory(10)->create();
        \App\Models\Product::factory()->create([
	   'user_id' => 1,    
           'name' => "Lechuga",
           'description' => Str::random(100),
           'image'=> "public/tot/product/product-disabled.png",
	   //'image'=> "https://static9.depositphotos.com/1642482/1148/i/600/depositphotos_11489401-stock-photo-orange-fruit.jpg",
	   'price' => 2000,
	   'requested_amount' => 0,
	   'is_milligram' => 1,
	   'is_unit' => 0
	]);
	\App\Models\Product::factory()->create([
	   'user_id' => 1,    
           'name' => "Tomate",
           'description' => Str::random(100),
           'image'=> "public/tot/product/product-disabled.png",
           'price' => 2000,
           'requested_amount' => 0,
           'is_milligram' => 1,
           'is_unit' => 0
	]);
	\App\Models\Product::factory()->create([
	   'user_id' => 1,    
           'name' => "Zanahoria",
           'description' => Str::random(100), 
           'image'=> "public/tot/product/product-disabled.png", 
           'price' => 2000,
           'requested_amount' => 0,
           'is_milligram' => 1,
           'is_unit' => 0
        ]);
	\App\Models\Product::factory()->create([
	   'user_id' => 1,    
           'name' => "Cilantro",
           'description' => Str::random(100),
           'image'=> "public/tot/product/product-disabled.png", 
           'price' => 2000,
           'requested_amount' => 0,
           'is_milligram' => 1,
           'is_unit' => 0
        ]);
	\App\Models\Product::factory()->create([
	   'user_id' => 1,    
           'name' => "Apio",
           'description' => Str::random(100),
           'image'=> "public/tot/product/product-disabled.png", 
           'price' => 2000,
           'requested_amount' => 0,
           'is_milligram' => 1,
           'is_unit' => 0
        ]);
	\App\Models\Product::factory()->create([
	   'user_id' => 1,    
           'name' => "Habichuela",
           'description' => Str::random(100),
           'image'=> "public/tot/product/product-disabled.png", 
           'price' => 2000,
           'requested_amount' => 0,
           'is_milligram' => 1,
           'is_unit' => 0
        ]);
	\App\Models\Product::factory()->create([
	   'user_id' => 1,    
           'name' => "Yuca",
           'description' => Str::random(100),
           'image'=> "public/tot/product/product-disabled.png", 
           'price' => 2000,
           'requested_amount' => 0,
           'is_milligram' => 1,
           'is_unit' => 0
        ]);
	\App\Models\Product::factory()->create([
	   'user_id' => 1,    
           'name' => "Platano",
           'description' => Str::random(100),
           'image'=> "public/tot/product/product-disabled.png", 
           'price' => 2000,
           'requested_amount' => 0,
           'is_milligram' => 0,
           'is_unit' => 1
        ]);
	\App\Models\Product::factory()->create([
	   'user_id' => 1,    
           'name' => "Cebollin",
           'description' => Str::random(100),
           'image'=> "public/tot/product/product-disabled.png", 
           'price' => 2000,
           'requested_amount' => 0,
           'is_milligram' => 1,
           'is_unit' => 0
        ]);
	\App\Models\Product::factory()->create([
	   'user_id' => 1,    
	   'name' => "Papa bulto",
           'description' => Str::random(100),
           'image'=> "public/tot/product/product-disabled.png", 
           'price' => 2000,
           'requested_amount' => 0,
           'is_milligram' => 0,
           'is_unit' => 1
        ]);

    }
}
