<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  Spatie\Permission\Models\Role;
use  Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1= Role::create(['name' => 'admin']);
        $role2= Role::create(['name' => 'bloger']);
 
        Permission::create(['name' => 'admin.codigosiva.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.codigosiva.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.codigosiva.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.codigosiva.destroy'])->assignRole($role1);
 
        Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.users.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.destroy'])->assignRole($role1);
 
    }
}
