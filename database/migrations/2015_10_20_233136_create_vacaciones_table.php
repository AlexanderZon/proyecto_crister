<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trabajador_id');
            $table->integer('permiso_id');
            $table->integer('dias');
            $table->date('fecha_inicio');
            $table->date('fecha_culminacion');
            $table->date('fecha_retorno');
            $table->integer('dias_frustrados');
            $table->integer('dias_pendientes');
            $table->string('observaciones');
            $table->timestamps();
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
        Schema::drop('vacaciones');
    }
}
