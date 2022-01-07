<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol_id = \App\Models\Rols::where('descripcion', 'SystemAdmin')->first();
        \App\Models\User::create([
            'nombre_completo' => 'Rosanyelis Mendoza',
            'name' => 'System Admin',
            'email' => 'systemadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // password
            'rol_id' => $rol_id->id,
            'remember_token' => Str::random(10),
        ]);

        $rol_id = \App\Models\Rols::where('descripcion', 'Administrador')->first();
        \App\Models\User::create([
            'nombre_completo' => 'Jon Doe',
            'name' => 'Mcariz',
            'email' => 'administrador@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // password
            'rol_id' => $rol_id->id,
            'remember_token' => Str::random(10),
        ]);

        $rol_id = \App\Models\Rols::where('descripcion', 'Laboratorista')->first();
        \App\Models\User::create([
            'nombre_completo' => 'Angel Perez',
            'name' => 'Laboratorio',
            'email' => 'laboratorio@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // password
            'rol_id' => $rol_id->id,
            'remember_token' => Str::random(10),
        ]);

        $rol_id = \App\Models\Rols::where('descripcion', 'Pesaje')->first();
        \App\Models\User::create([
            'nombre_completo' => 'Carlota Gomez',
            'name' => 'Pesaje',
            'email' => 'pesaje@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // password
            'rol_id' => $rol_id->id,
            'remember_token' => Str::random(10),
        ]);

        $rol_id = \App\Models\Rols::where('descripcion', 'Vendedor')->first();
        \App\Models\User::create([
            'nombre_completo' => 'Mirna Mendez',
            'name' => 'Vendedor',
            'email' => 'vendedor@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // password
            'rol_id' => $rol_id->id,
            'remember_token' => Str::random(10),
        ]);
    }
}
