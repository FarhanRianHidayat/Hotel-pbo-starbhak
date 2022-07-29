<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kamar;
use App\Models\User;
use Illuminate\Database\Seeder;

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

        // Kamar::create([
        //     'no_kamar' => '01',
        //     'harga' => '$150',
        //     'kapasitas' => '3',
        //     'tipe' => 'Superior',
        // ]);
        // Kamar::create([
        //     'no_kamar' => '02',
        //     'harga' => '$120',
        //     'kapasitas' => '2',
        //     'tipe' => 'Deluxe',
        // ]);

        User::create([
            'name' => 'Saputra',
            'role' => 'admin',
            'username' => 'putra',
            'email' => 'saputra219021@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Arya Bima',
            'role' => 'resepsionis',
            'username' => 'bima',
            'email' => 'bima@gmail.com',
            'password' => bcrypt('password')
        ]);


    }
}
