<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categoria_vista', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idVista');
            $table->foreign('idVista')->references('id')->on('vistas')->onDelete('cascade');
            $table->unsignedBigInteger('idCategoriaDeUsuario');
            $table->foreign('idCategoriaDeUsuario')->references('id')->on('categoriasdeusuarios')->onDelete('cascade');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_vista');
    }
};
