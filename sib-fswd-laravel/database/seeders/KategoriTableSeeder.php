<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            "nama_kategori" => "Sport",
            "deskripsi" => "2000CC"
        ]);

        Kategori::create([
            "nama_kategori" => "Casuals",
            "deskripsi" => "1200CC"
        ]);
    }
}
