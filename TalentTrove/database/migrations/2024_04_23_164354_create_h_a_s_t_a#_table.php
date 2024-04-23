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
        Schema::create('h_a_s_t_a#', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_idioma');
            $table->unsignedBigInteger('id_trabajo');
            // Agregar más columnas según sea necesario

            // Agregar restricción de clave foránea para id_trabajo
            $table->foreign('id_trabajo')->references('id')->on('trabajos')->onDelete('cascade');

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
        Schema::dropIfExists('h_a_s_t_a#');
    }
};
