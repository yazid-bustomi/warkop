<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //kemampuan super admin
        Permission::create(['name'=>'tambah-user']);
        Permission::create(['name'=>'edit-user']);
        Permission::create(['name'=>'hapus-user']);
        Permission::create(['name'=>'lihat-user']);

        //kemapuan admin dan crew
        Permission::create(['name'=>'buat-transaksi']);
        Permission::create(['name'=>'edit-transaksi']);
        Permission::create(['name'=>'lihat-transaksi']);

        //kemampuan crew dan Admin
        Permission::create(['name'=>'tambah-inventory']);
        Permission::create(['name'=>'edit-inventory']);
        Permission::create(['name'=>'lihat-inventory']);
        Permission::create(['name'=>'hapus-inventory']);

        //kemampuan SA dan Admin
        Permission::create(['name'=>'tambah-product']);
        Permission::create(['name'=>'edit-product']);
        Permission::create(['name'=>'lihat-product']);
        Permission::create(['name'=>'hapus-product']);

        Role::create(['name'=>'super-admin']);
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'crew']);

        $roleSuperadmin=Role::findByName('super-admin');

            $roleSuperadmin->givePermissionTo('tambah-user');
            $roleSuperadmin->givePermissionTo('edit-user');
            $roleSuperadmin->givePermissionTo('hapus-user');
            $roleSuperadmin->givePermissionTo('lihat-user');
            $roleSuperadmin->givePermissionTo('lihat-transaksi');
            $roleSuperadmin->givePermissionTo('lihat-product');
    
            $roleAdmin=Role::findByName('admin');

                $roleAdmin->givePermissionTo('buat-transaksi');
                $roleAdmin->givePermissionTo('edit-transaksi');
                $roleAdmin->givePermissionTo('lihat-transaksi');
                $roleAdmin->givePermissionTo('tambah-inventory');
                $roleAdmin->givePermissionTo('edit-inventory');
                $roleAdmin->givePermissionTo('hapus-inventory');
                $roleAdmin->givePermissionTo('lihat-inventory');
                $roleAdmin->givePermissionTo('tambah-product');
                $roleAdmin->givePermissionTo('edit-product');
                $roleAdmin->givePermissionTo('lihat-product');
                $roleAdmin->givePermissionTo('hapus-product');

                $roleCrew=Role::findByName('crew');

                    $roleCrew->givePermissionTo('buat-transaksi');
                    $roleCrew->givePermissionTo('lihat-transaksi');
                    $roleCrew->givePermissionTo('lihat-inventory');








    }
}
