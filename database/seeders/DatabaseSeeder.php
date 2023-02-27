<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::create([
            'name' => 'Papas Fritas',
            'description' => 'Papas Fritas',
            'price' => 100.00,
        ]);

        Product::create([
            'name' => 'Chocolate KitKat',
            'description' => 'Delicioso Chocolate KitKat de 100 gramos',
            'price' => 200.00,
        ]);

        Product::create([
            'name' => 'Refresco Coca Cola',
            'description' => 'El clásico refresco Coca Cola de 1.5 litros',
            'price' => 300.00,
        ]);
    }
}
