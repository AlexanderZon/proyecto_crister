<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();

        User::create([
        	'rol_id' => 1,
        	'nombre' => 'Administrador',
        	'email' => 'Admin',
        	'password' => Hash::make('123456')
        	]);

        User::create([
        	'rol_id' => 2,
        	'nombre' => 'rrhh',
        	'email' => 'RRHH',
        	'password' => Hash::make('123456')
        	]);

        User::create([
        	'rol_id' => 3,
        	'nombre' => 'trabajador1',
        	'email' => 'Trabajador1',
        	'password' => Hash::make('123456')
        	]);
    }
}
