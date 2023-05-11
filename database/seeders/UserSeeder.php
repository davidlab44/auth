<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
      {   
        \App\Models\User::factory(10)->create();

          \App\Models\User::factory()->create([
          'api_token' => Str::random(50),
	  'company_id' => 1,
	  'role' => 'checkout',
	  'name' => 'Test User',
          'email' => Str::random(10).'@gmail.com'
          ]);
    }
}
