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
        Schema::create('cabecerapedidos', function (Blueprint $table) {
            $table->id();
            $table->datetime('fecha',3);
            $table->unsignedBigInteger('idUser');
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('idSucursal');
            $table->foreign('idSucursal')->references('id')->on('sucurs')->onDelete('cascade');
            $table->integer('estado');
            $table->decimal('total',20,3);
            $table->string('nombreUsuario',255);
            $table->string('nombreSucursal',255);
            $table->integer('rolUsuarioModificacion');
            $table->smallInteger('discriminaIva');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabecerapedidos');
    }
};
