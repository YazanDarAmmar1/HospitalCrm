<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /*** Run the database seeds.** @return void */
    public function run()
    {
        $user = User::create([
        'name' => 'Sama Cards',
        'email' => 'admin@samacards.com',
        'password' => bcrypt('123456'),
        'roles_name' => ['owner'],
        'status' => 'active',
        ]);

        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
