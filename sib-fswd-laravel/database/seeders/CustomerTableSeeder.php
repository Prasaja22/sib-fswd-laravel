<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Customer::create(
        //     [
        //         "nama" => "Ghozy Nouval Satya Prasaja",
        //         "email" => "Ghozy@gmail.com",
        //         "alamat" => "Malang",
        //     ],
        // );
        // Customer::create(
        //     [
        //         "nama" => "Nouval Rozan",
        //         "email" => "nouval@gmail.com",
        //         "alamat" => "Malang",
        //     ],
        // );
        // Customer::create(
        //     [
        //         "nama" => "Donny Wahyu",
        //         "email" => "Donny@gmail.com",
        //         "alamat" => "Malang",
        //     ],
        // );

        Customer::factory()->count(10)->create();
    }
}
