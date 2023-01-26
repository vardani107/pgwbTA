<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        user::create([
            'name' => 'futsal',
            'email' => 'futsal@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'futsal'
        ]);
        user::create([
            'name' => 'dance',
            'email' => 'dance@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'dance'
        ]);
        user::create([
            'name' => 'pmr',
            'email' => 'pmr@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'pmr'
        ]);
        user::create([
            'name' => 'olip',
            'email' => 'olip@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'siswa'
        ]);
    }
}
