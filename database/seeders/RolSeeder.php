<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Rols::create(['descripcion' => 'SystemAdmin']);
        \App\Models\Rols::create(['descripcion' => 'Administrador']);
        \App\Models\Rols::create(['descripcion' => 'Laboratorista']);
        \App\Models\Rols::create(['descripcion' => 'Pesaje']);
        \App\Models\Rols::create(['descripcion' => 'Vendedor']);
    }
}
