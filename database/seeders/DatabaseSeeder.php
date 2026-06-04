<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
    BookshelfSeeder::class,
    CategorySeeder::class,

    RoleSeeder::class,
    UserSeeder::class,

    BookSeeder::class,

    LoanSeeder::class,
    LoanDetailSeeder::class,
    ReturnSeeder::class,
]);

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => null,
        //     'firstname' => 'Test User',
        //     'lastname' => 'Last Name',
        //     'npm' => '1234567890',
        //     'email' => 'test@example.com',
        //     'password' => bcrypt('password')
        // ]);
    }
}