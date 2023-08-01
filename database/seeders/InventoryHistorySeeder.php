<?php

namespace Database\Seeders;

use App\Models\Inventory_history;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoryHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inventory_history::create([
            'inv_id' => '1',
            'status' => 'bagus',
            'keterangan' => 'masih baru dan di pakai semua',
        ]);
        Inventory_history::create([
            'inv_id' => '2',
            'status' => 'bagus',
            'keterangan' => 'masih di pakai ',
        ]);
    }
}
