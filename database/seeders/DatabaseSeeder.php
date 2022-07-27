<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kamar;
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

        Kamar::create([
            'no_kamar' => '01',
            'harga' => '$150',
            'kapasitas' => '3',
            'tipe' => 'Superior',
        ]);
        Kamar::create([
            'no_kamar' => '02',
            'harga' => '$120',
            'kapasitas' => '2',
            'tipe' => 'Deluxe',
        ]);
    }
}
