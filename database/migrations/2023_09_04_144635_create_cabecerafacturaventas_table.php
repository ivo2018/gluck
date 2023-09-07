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
        Schema::create('cabecerafacturaventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idSucursal');
            $table->foreign('idSucursal')->references('id')->on('sucurs')->onDelete('cascade');
            $table->bigInteger('numeroComprobante');
            $table->string('letra',2);
            $table->unsignedBigInteger('idCliente');
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->string('nombreCliente',255);
            $table->datetime('fecha',3);
            $table->decimal('descuento',20,3);
            $table->decimal('recargo',20,3);
            $table->decimal('netoGravado',20,3);
            $table->decimal('total',20,3);
            $table->string('cae',255);
            $table->decimal('ganancia',20,3);
            $table->unsignedBigInteger('idCaja');
            $table->foreign('idCaja')->references('id')->on('movimientosdecajas')->onDelete('cascade');
            $table->bigInteger('idVendedor');
            $table->decimal('efectivo',20,3);
            $table->decimal('debito',20,3);
            $table->decimal('credito',20,3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabecerafacturaventas');
    }
};
