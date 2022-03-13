<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// spatie
use Spatie\Permission\Models\Permission;

class SeedertablePermissios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            // Tables Roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            // Table Users
            'ver-user',
            'crear-user',
            'editar-user',
            'borrar-user',
            // Table Trucks
            'ver-vehiculo',
            'crear-vehiculo',
            'editar-vehiculo',
            'borrar-vehiculo',
            // Table Persons
            'ver-persona',
            'crear-persona',
            'editar-persona',
            'borrar-persona',
        ];

        foreach ($permisos as $value) {
            Permission::create(['name' => $value]);
        }
    }
}
