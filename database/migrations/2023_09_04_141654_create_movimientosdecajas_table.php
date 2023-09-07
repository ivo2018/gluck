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
        Schema::create('movimientosdecajas', function (Blueprint $table) {
            $table->id();
            $table->datetime('fecha',3);
            $table->string('concepto',255);
            $table->string('detalle',255);
            $table->string('tipoDeMovimiento',1);
            $table->decimal('total',20,3);
            $table->unsignedBigInteger('idSucursal');
            $table->foreign('idSucursal')->references('id')->on('sucurs')->onDelete('cascade');
            $table->string('formaPago',8);
            $table->bigInteger('idComprobante');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientosdecajas');
    }
};
