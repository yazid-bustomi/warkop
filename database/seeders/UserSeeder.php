<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin=User::create([
            'name'=>'supadmin',
            'username'=>'5upadmin',
            'password'=>bcrypt('3213')
        ]);
        $superadmin->assignRole('super-admin');
        
        $admin=User::create([
            'name'=>'amin',
            'username'=>'4dmin',
            'password'=>bcrypt('321')
        ]);
        $admin->assignRole('admin');

        $crew=User::create([
            'name'=>'kru',
            'username'=>'kr3w',
            'password'=>bcrypt('123')
        ]);
        $crew->assignRole('crew');
    }
}
