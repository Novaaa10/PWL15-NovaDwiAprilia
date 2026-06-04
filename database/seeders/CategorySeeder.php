<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'category' => 'Programming',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'category' => 'Database',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'category' => 'Networking',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}