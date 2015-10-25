<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargasFamiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargas_familiares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trabajador_id');
            $table->integer('parentesco_id');
            $table->string('nombre', 45);
            $table->string('apellido', 45);
            $table->date('fecha_nacimiento');
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
        Schema::drop('cargas_familiares');
    }
}
