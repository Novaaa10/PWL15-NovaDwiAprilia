<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanDetailSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('loan_detail')->insert([
            [
                'id' => 1,
                'loan_id' => 1,
                'book_id' => 1,
                'is_return' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}