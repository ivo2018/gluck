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
        Schema::create('detallepedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idProducto');
            $table->foreign('idProducto')->references('id')->on('productos')->onDelete('cascade');
            $table->decimal('cantidad',18,0);
            $table->longText('observacion');
            $table->unsignedBigInteger('idPedido');
            $table->foreign('idPedido')->references('id')->on('cabecerapedidos')->onDelete('cascade');
            $table->string('descripcion',255);
            $table->decimal('valor',20,3);
            $table->decimal('total',20,3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detallepedidos');
    }
};
