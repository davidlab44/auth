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
           'price' => 2000
        ]);
    }
}
