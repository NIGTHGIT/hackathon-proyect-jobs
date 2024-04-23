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
        Schema::create('trabajos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_trabajo');
            $table->string('tiempo');
            $table->enum('formato', ['presencia', 'hibrido', 'semi presencial']);
            $table->decimal('salario', 10, 2)->nullable();
            $table->string('categoria');
            $table->text('descripcion_trabajo');
            $table->string('pais');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('metodo_solicitud');
            $table->unsignedBigInteger('id_usuario_empleador');
            $table->foreign('id_usuario_empleador')->references('id')->on('usuario_empleador')->onDelete('cascade');
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
        Schema::dropIfExists('trabajos');
    }
};
