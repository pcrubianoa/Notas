<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('cache:clear');
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Users
        Permission::create(['name' => 'users_manage']);

        // Periods
        Permission::create(['name' => 'periods_manage']);

        // Subjects
        Permission::create(['name' => 'subjects_manage']);

        // Grades
        Permission::create(['name' => 'grades_manage']);

        // Courses
        Permission::create(['name' => 'courses_manage']);

        // Permissions
        Permission::create(['name' => 'permissions_manage']);
    }
}
