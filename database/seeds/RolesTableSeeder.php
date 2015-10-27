<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Rol::truncate();
        
        Rol::create([
        	'id' => 1,
        	'nombre' => 'administrador',
        	'titulo' => 'Administrador'
        	]);

        Rol::create([
        	'id' => 2,
        	'nombre' => 'rrhh',
        	'titulo' => 'Recursos Humanos'
        	]);

        Rol::create([
        	'id' => 3,
        	'nombre' => 'trabajador',
        	'titulo' => 'Trabajados'
        	]);

    }
}
