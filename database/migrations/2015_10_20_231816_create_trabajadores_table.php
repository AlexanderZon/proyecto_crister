<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cargo_id'); 
            $table->integer('supervisor_id');   
            $table->integer('dato_laboral_id');
            $table->integer('status_id');
            $table->integer('dependencia_id');
            $table->string('nombre', 45);
            $table->string('apellido', 45);
            $table->string('cedula', 10);
            $table->string('sexo', 1);
            $table->date('fecha_nacimiento');
            $table->string('direccion');
            $table->string('telefono_celular', 15);
            $table->string('telefono_hogar', 15);
            $table->string('telefono_oficina', 15);
            $table->string('email')->index();
            $table->string('rif')->index();
            $table->timestamp('created_at');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trabajadores');
    }
}
