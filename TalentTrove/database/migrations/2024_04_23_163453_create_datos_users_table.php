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
        Schema::create('datos_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();$table->string('Pais_que_reside');
            $table->integer('Edad');
            $table->string('Telefono');
            $table->text('Algo_que_le_quiera_decir')->nullable();
            $table->string('WEB_URL')->nullable();
            $table->unsignedBigInteger('id_usuario');
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
        Schema::dropIfExists('datos_users');
    }
};
