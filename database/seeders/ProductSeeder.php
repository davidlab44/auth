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
	\App\Models\Product::factory(10)->create();
        \App\Models\Product::factory()->create([
           'name' => Str::random(10),
           'description' => Str::random(100),
	   'image'=> "https://static9.depositphotos.com/1642482/1148/i/600/depositphotos_11489401-stock-photo-orange-fruit.jpg",
	   'price' => 2000,
	   'requested_amount' => 0
        ]);
    }
}
