<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create([
            "name" => "Ferrari 2233Lc",
            "type" => "sport",
            "jenis" => "Automatic Engine",
        ]);
    }
}
