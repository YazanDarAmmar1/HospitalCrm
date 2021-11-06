<?php
use Illuminate\Database\Seeder;use Spatie\Permission\Models\Permission;class PermissionTableSeeder extends Seeder
{
    /*** Run the database seeds.** @return void */
    public function run()
    {
        $permissions = [
            'hospital',
            'add-hospital',
            'import-hospital',
            'import-services',
            'delete-hospital',
            'edit-hospital',
            'edit-status-hospital',
            'edit-online',
            'add-service',
            'logo',
            'contract',
            'delete-contract',
            'doctor-list',

            'download-doctor',


            'setting',
            'type-of-provider',
            'provider-delete',
            'provider-edit',

            'users',
            'add-user',
            'edit-user',
            'delete-user',

            'show-permission',
            'add-permission',
            'edit-permission',
            'delete-permission',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
