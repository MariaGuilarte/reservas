<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class DatabaseSeeder extends Seeder
{
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

        $adminUser = User::create([
          "name" => "Admin",
          "email" => "admin@gmail.com",
          "password" => bcrypt(123456),
          "role_id" => 5
        ]);

        $dirUser = User::create([
          "name" => "Director",
          "email" => "dir@gmail.com",
          "password" => bcrypt(123456),
          "role_id" => 4
        ]);

        $op1User = User::create([
          "name" => "Operator 1",
          "email" => "op1@gmail.com",
          "password" => bcrypt(123456),
          "created_by" => 1,
          "role_id" => 3
        ]);

        $op2User = User::create([
          "name" => "Operator 2",
          "email" => "op2@gmail.com",
          "password" => bcrypt(123456),
          "created_by" => 2,
          "role_id" => 3
        ]);

        $clientUser = User::create([
          "name" => "Client",
          "email" => "client@gmail.com",
          "password" => bcrypt(123456),
          "role_id" => 1
        ]);

        $proUser = User::create([
          "name" => "Professional",
          "email" => "pro@gmail.com",
          "password" => bcrypt(123456),
          "role_id" => 2
        ]);
    }
}
