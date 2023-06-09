<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\VarDumper\Caster\RdKafkaCaster;

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


        $this->call(
            [
                // OrderTableSeeder::class,
                // CustomerTableSeeder::class,
                // CarTableSeeder::class,
                // KategoriTableSeeder::class,
                UserTableSeeder::class,
            ]
            );
    }
}
