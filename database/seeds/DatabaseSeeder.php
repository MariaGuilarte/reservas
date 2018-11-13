<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $cliRole = Role::create([
          "name" => "Cliente",
          "description" => "Cliente"
        ]);

        $proRole = Role::create([
          "name" => "Profesional",
          "description" => "Profesional"
        ]);

        $opRole = Role::create([
          "name" => "Operador",
          "description" => "Todos los permisos para cliente y profesional, todos los permisos para servicios, todos los permisos para reservaciones y fechas"
        ]);

        $dirRole = Role::create([
          "name" => "Director",
          "description" => "Director"
        ]);

        $adminRole = Role::create([
          "name" => "Administrador",
          "description" => "Admin"
        ]);

        $opUser = User::create([
          "name" => "Operator user",
          "email" => "opuser@gmail.com",
          "password" => bcrypt(123456),
          "role_id" => 3
        ]);

        $dirUser = User::create([
          "name" => "Director user",
          "email" => "diruser@gmail.com",
          "password" => bcrypt(123456),
          "role_id" => 4
        ]);

        $adminUser = User::create([
          "name" => "Admin user",
          "email" => "adminuser@gmail.com",
          "password" => bcrypt(123456),
          "role_id" => 5
        ]);
    }
}
