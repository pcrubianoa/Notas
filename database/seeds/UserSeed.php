<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@notas.com',
            'password' => bcrypt('password')
        ]);
        $user->assignRole('administrator');

        $user = User::create([
            'name' => 'Profesor',
            'email' => 'profesor@notas.com',
            'password' => bcrypt('password')
        ]);
        $user->assignRole('teacher');

        $user = User::create([
            'name' => 'Estudiante',
            'email' => 'estudiante@notas.com',
            'password' => bcrypt('password')
        ]);
        $user->assignRole('student');
    }
}
