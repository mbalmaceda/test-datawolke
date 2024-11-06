<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brand')->insert([
            'name' => Str::random(5),
            'description' => Str::random(10),
            'location' => Str::random(15),
            'email' => Str::random(10).'@example.com',
        ]);
        DB::table('brand')->insert([
            'name' => Str::random(5),
            'description' => Str::random(10),
            'location' => Str::random(15),
            'email' => Str::random(10).'@example.com',
        ]);
        DB::table('brand')->insert([
            'name' => Str::random(5),
            'description' => Str::random(10),
            'location' => Str::random(15),
            'email' => Str::random(10).'@example.com',
        ]);
    }
}
