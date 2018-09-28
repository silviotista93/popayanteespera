<?php

use Illuminate\Database\Seeder;
use \Spatie\Permission\Models\Role;
use \App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        User::truncate();

        $adminRole = Role::create(['name' => 'Administrador']);
        $empreRole = Role::create(['name' => 'Empresario']);

        $admin = new User;
        $admin->name = 'Silvio Mauricio';
        $admin->apellidos = 'Gutierrez Quiñones';
        $admin->email = 'silviotista93@gmail.com';
        $admin->password = bcrypt('2310');
        $admin->telefono = '318564382';
        $admin->foto = '';
        $admin->save();
        $admin->assignRole($adminRole);
    }
}
