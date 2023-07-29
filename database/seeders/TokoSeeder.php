<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Toko::create([
            'name' => 'Warkop H.Slamet',
            'alamat' => 'Bangil'
        ]);

        DB::table('users')->insert([
            'name' => 'tomi',
            'username' => 'tomi',
            'email' => 'tomi@gmail.com',
            'role' => 'admin',
            'phone' => '085850058',
            'password' => Hash::make('password'),
            'toko_id' => '1'
        ]);
        
        
    }
}
