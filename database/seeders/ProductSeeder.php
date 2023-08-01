<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'kopi sachet',
            'price' => '5000',
            'toko_id' => '1'
        ]);
        
        Product::create([
            'name' => 'kopi sachet + es',
            'price' => '6000',
            'toko_id' => '1'
        ]);
        Product::create([
            'name' => 'nutrisari',
            'price' => '3000',
            'toko_id' => '1'
        ]);
        Product::create([
            'name' => 'kacang',
            'price' => '1000',
            'toko_id' => '1'
        ]);
        Product::create([
            'name' => 'gorengan',
            'price' => '1000',
            'toko_id' => '1'
        ]);

        Product::create([
            'name' => 'mie kuah',
            'price' => '6000',
            'toko_id' => '2'
        ]);

        Product::create([
            'name' => 'mie + telor',
            'price' => '8000',
            'toko_id' => '2'
        ]);

        Product::create([
            'name' => 'nasi bungkus',
            'price' => '7000',
            'toko_id' => '2'
        ]);
    }
}
