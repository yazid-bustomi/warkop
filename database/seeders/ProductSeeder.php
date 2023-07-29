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
        DB::table('users')->insert([
            'name' => 'tomi',
            'email' => 'tomi@gmail.com',
            'password' => Hash::make('password'),
        ]);

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
    }
}
