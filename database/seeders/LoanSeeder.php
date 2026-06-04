<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('loans')->insert([
            [
                'id' => 1,
                'user_npm' => 12345678,
                'loan_at' => now(),
                'return_at' => now()->addDays(7),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}