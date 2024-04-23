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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion');
            $table->string('foto')->nullable();
            $table->unsignedBigInteger('id_usuario_empleador');
            $table->foreign('id_usuario_empleador')->references('id')->on('usuario_empleador')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('comenatarios', function (Blueprint $table) {
            $table->id();
            $table->text('comentario');
            $table->unsignedBigInteger('id_post');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_post')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('usuarios')->onDelete('cascade');
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
        Schema::dropIfExists('comenatarios');
        Schema::dropIfExists('usuario_empleadors');
    }
};
