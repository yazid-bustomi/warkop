<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderDetail::create([
            'order_id' => '1',
            'product_id' => '1',
            'harga' => '10000',
            'qty' => '2'
        ]);
        OrderDetail::create([
            'order_id' => '1',
            'product_id' => '4',
            'harga' => '5000',
            'qty' => '5'
        ]);
        OrderDetail::create([
            'order_id' => '1',
            'product_id' => '5',
            'harga' => '5000',
            'qty' => '5'
        ]);
    }
}
