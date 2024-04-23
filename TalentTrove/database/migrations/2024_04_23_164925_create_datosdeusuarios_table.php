<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoritos_job', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_job');
            $table->unsignedBigInteger('id_usuario');
            // Puedes agregar más columnas si es necesario

            // Agregar restricciones de clave foránea
            $table->foreign('id_job')->references('id')->on('trabajos')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favoritos_job');
    }
};
