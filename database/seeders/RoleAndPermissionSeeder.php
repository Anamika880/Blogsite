<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create-posts']);
        Permission::create(['name' => 'edit-posts']);
        Permission::create(['name' => 'delete-posts']);
        Permission::create(['name' => 'view-posts']);
        $adminRole = Role::create(['name' => 'Admin']);
        $authorRole = Role::create(['name' => 'Author']);
        $readerRole = Role::create(['name' => 'Reader']);
        $adminRole->givePermissionTo([
            'create-posts',
            'edit-posts',
            'delete-posts',
            'view-posts',
        ]);
        $authorRole->givePermissionTo([
            'create-posts',
            'edit-posts',
            'view-posts',
        ]);
        $readerRole->givePermissionTo([
            'view-posts',
        ]);
    }
}
