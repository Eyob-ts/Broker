<?php

namespace Database\Seeders;

use App\Data\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@edb.com',
            'password' => Hash::make('password'),
            'role' => Role::ADMIN,
        ]);

        // Create editor user
        User::create([
            'name' => 'Editor User',
            'email' => 'editor@edb.com',
            'password' => Hash::make('password'),
            'role' => Role::EDITOR,
        ]);
        User::create([
            'name' => 'Test user',
            'email' => 'user@edb.com',
            'password' => Hash::make('password'),
            'role' => Role::USER,

        ]);
        $this->call([
            CategorySeeder::class,
        ]);
        $this->call([
            ListingSeeder::class,
        ]);
    }


}
