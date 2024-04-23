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
        Schema::create('datos-de-usuarios__empleadors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empresa');
            $table->string('actividad');
            $table->string('telefono');
            $table->text('mensaje');
            $table->string('url_web')->nullable();
            $table->integer('empleados_trabajando');
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
        Schema::dropIfExists('datos-de-usuarios__empleadors');
    }
};
