<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReturnSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('returns')->insert([
            [
                'id' => 1,
                'loan_detail_id' => 1,
                'charge' => false,
                'amount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}