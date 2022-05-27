<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos =[
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            'ver-cursos',
            'crear-cursos',
            'editar-cursos',
            'borrar-cursos',
        ];
        foreach( $permisos as $permiso){
            Permission::create(['name' => $permiso]);
        }
    }
}
