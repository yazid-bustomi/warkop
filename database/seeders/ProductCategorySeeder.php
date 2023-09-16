<?php

namespace Database\Seeders;

use App\Models\productCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        productCategory::create([
            'name' => 'makanan',
            'toko_id' => '1'
        ]);

        productCategory::create([
            'name' => 'minuman',
            'toko_id' => '1'
        ]);

        productCategory::create([
            'name' => 'makanan ringan',
            'toko_id' => '1'
        ]);

        productCategory::create([
            'name' => 'gorengan',
            'toko_id' => '1'
        ]);

        productCategory::create([
            'name' => 'Mie',
            'toko_id' => '1'
        ]);

    }
}
