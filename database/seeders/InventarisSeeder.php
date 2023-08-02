<?php

namespace Database\Seeders;

use App\Models\Inventaris;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inventaris::create([
            'name' => 'meja',
            'qty' => '16',
            'toko_id' => '1'
        ]);
        Inventaris::create([
            'name' => 'kursi',
            'qty' => '37',
            'toko_id' => '1'
        ]);
        Inventaris::create([
            'name' => 'lampu',
            'qty' => '24',
            'toko_id' => '2'
        ]);
    }
}
