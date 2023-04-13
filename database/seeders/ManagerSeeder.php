<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
	DB::table('managers')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'country' => 57,
            'phone' => Str::random(10),
            'password' => Hash::make('password'),
        ]);
    }
}
