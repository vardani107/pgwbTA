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
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin'
        ]);
        user::create([
            'name' => 'olip',
            'email' => 'olip@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'siswa'
        ]);
        user::create([
            'name' => 'Alip',
            'email' => 'Alip@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'siswa'
        ]);
        user::create([
            'name' => 'Bintang',
            'email' => 'Bintang@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'siswa'
        ]);
        
    }
}
