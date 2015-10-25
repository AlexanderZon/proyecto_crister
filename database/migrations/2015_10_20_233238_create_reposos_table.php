<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepososTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reposos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trabajador_id');
            $table->integer('centro_asistencial_id');
            $table->integer('periodo_id');
            $table->string('patologia', 255);
            $table->date('fecha_inicio');
            $table->date('fecha_culminacion');
            $table->date('fecha_reingreso');
            $table->integer('total_dias');
            $table->integer('total_semanas');
            $table->integer('total_meses');
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
        Schema::drop('reposos');
    }
}
