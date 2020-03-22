<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo('users_manage');
        $role->givePermissionTo('periods_manage');
        $role->givePermissionTo('subjects_manage');
        $role->givePermissionTo('courses_manage');
        $role->givePermissionTo('grades_manage');

        $role = Role::create(['name' => 'teacher']);
        $role->givePermissionTo('subjects_manage');
        $role->givePermissionTo('courses_manage');

        $role = Role::create(['name' => 'student']);
        $role->givePermissionTo('grades_manage');
    }
}
