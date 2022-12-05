<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin  = Role::create(['name' => 'admin']);
        $roleCeo  = Role::create(['name' => 'ceo']);

        Permission::create(['name' => 'admin.index', 'description' => 'Ver Inicio'])->syncRoles([$roleAdmin, $roleCeo]);

        Permission::create(['name' => 'admin.roles.index', 'description' => 'Ver Roles'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin', 'description' => 'Gestión Usuarios Administrador'])->syncRoles([$roleAdmin,]);

        Permission::create(['name' => 'admin.permissions.index', 'description' => 'Ver Permisos '])->syncRoles([$roleAdmin,]);
    }
}
