<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'socio']);


        Permission::create(['name'=>'login'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'registrar'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.users.index'])   ->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.create'])  ->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.edit'])    ->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.users.destroy']) ->syncRoles([$role1]);
    }
}
